<nav aria-label="primary" {{ $attributes }}>
    {{-- Build grouped navigation by inspecting registered resources and pages --}}

    <?php
    use Filament\Filament;

    $groups = [];
    $ungrouped = [];

    // Add dashboard as top item
    $topItems = [
        \Filament\NavigationItem::make('filament::dashboard.title', route('filament.dashboard'))
            ->activeRule((string) \Illuminate\Support\Str::of(route('filament.dashboard', [], false))->after('/'))
            ->icon('heroicon-o-home')
            ->sort(-1),
    ];

    // Collect resource navigation items grouped by their group name (if provided)
    foreach (Filament::getResources() as $resource) {
        if (! Filament::can('viewAny', $resource::getModel())) {
            continue;
        }

        $group = null;

        if (method_exists($resource, 'getNavigationGroup')) {
            $group = $resource::getNavigationGroup();
        } elseif (property_exists($resource, 'navigationGroup')) {
            $group = $resource::$navigationGroup ?? null;
        }

        $items = $resource::navigationItems();

        if ($group) {
            $groups[$group] = array_merge($groups[$group] ?? [], $items);
        } else {
            $ungrouped = array_merge($ungrouped, $items);
        }
    }

    // Collect page navigation items (ungrouped)
    foreach (Filament::getPages() as $page) {
        if (! Filament::can('view', $page)) {
            continue;
        }

        $ungrouped = array_merge($ungrouped, $page::navigationItems());
    }

    // Sort groups alphabetically
    ksort($groups);
    ?>

    <ol>
        {{-- Dashboard/top items --}}
        @foreach ($topItems as $item)
            <li>
                <x-filament::nav-link
                    :active-rule="$item->activeRule"
                    :icon="$item->icon"
                    :label="$item->label"
                    :url="$item->url"
                />
            </li>
        @endforeach

        {{-- Ungrouped items first --}}
        @foreach ($ungrouped as $item)
            <li>
                <x-filament::nav-link
                    :active-rule="$item->activeRule"
                    :icon="$item->icon"
                    :label="$item->label"
                    :url="$item->url"
                />
            </li>
        @endforeach

        {{-- Grouped resources --}}
        @foreach ($groups as $groupLabel => $items)
            <?php $groupKey = \Illuminate\Support\Str::slug($groupLabel); ?>
            <?php $initial = strtoupper(substr($groupLabel, 0, 1)); ?>
            <li class="filament-nav-group" data-group="{{ $groupKey }}">
                <button type="button" class="filament-nav-group-toggle" aria-expanded="true" data-group="{{ $groupKey }}">
                    <span class="filament-nav-group-icon">{{ $initial }}</span>
                    <span class="filament-nav-group-label">{{ $groupLabel }}</span>
                    <span class="filament-nav-group-caret">▾</span>
                </button>
                <ol class="filament-nav-group-items">
                    @foreach ($items as $item)
                        <li>
                            <x-filament::nav-link
                                :active-rule="$item->activeRule"
                                :icon="$item->icon"
                                :label="$item->label"
                                :url="$item->url"
                            />
                        </li>
                    @endforeach
                </ol>
            </li>
        @endforeach

        <style>
            .filament-nav-group { margin-top: 0.5rem; }
            .filament-nav-group-toggle {
                display: flex;
                align-items: center;
                gap: 0.5rem;
                width: 100%;
                background: transparent;
                border: none;
                color: inherit;
                padding: 0.4rem 0.25rem;
                text-align: left;
                cursor: pointer;
                font-weight: 600;
                font-size: .9rem;
            }
            .filament-nav-group-toggle:focus { outline: none; }
            .filament-nav-group-icon {
                display:inline-flex; align-items:center; justify-content:center; width:1.6rem; height:1.6rem; border-radius:9999px; background:rgba(255,255,255,0.04); color:inherit; font-size:0.75rem; font-weight:700;
            }
            .filament-nav-group-caret { margin-left: auto; opacity: 0.85; transform-origin:center; transition: transform .18s ease; }

            /* smooth collapse animation using max-height */
            .filament-nav-group-items { list-style: none; margin: 0 0 0 0.5rem; padding-left: 0; max-height: 999px; overflow: hidden; transition: max-height .22s ease, opacity .18s ease; opacity:1; }
            .filament-nav-group.collapsed > .filament-nav-group-items { max-height: 0; opacity: 0; }
            .filament-nav-group.collapsed > .filament-nav-group-toggle .filament-nav-group-caret { transform: rotate(-90deg); }
            .filament-nav-group.collapsed > .filament-nav-group-toggle { opacity: .9; }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                function setCollapsedState(el, collapsed) {
                    if (collapsed) {
                        el.classList.add('collapsed');
                        el.querySelector('.filament-nav-group-toggle').setAttribute('aria-expanded', 'false');
                    } else {
                        el.classList.remove('collapsed');
                        el.querySelector('.filament-nav-group-toggle').setAttribute('aria-expanded', 'true');
                    }
                }

                document.querySelectorAll('.filament-nav-group-toggle').forEach(function (btn) {
                    var groupKey = btn.dataset.group;
                    var li = btn.closest('.filament-nav-group');

                    // Initialize from localStorage
                    var stored = localStorage.getItem('filament-nav-group-' + groupKey);
                    if (stored === 'collapsed') {
                        setCollapsedState(li, true);
                    }

                    // Ensure max-height is set for animation (expand)
                    var items = li.querySelector('.filament-nav-group-items');
                    if (items && ! li.classList.contains('collapsed')) {
                        items.style.maxHeight = items.scrollHeight + 'px';
                    }

                    btn.addEventListener('click', function () {
                        var isCollapsed = li.classList.contains('collapsed');
                        setCollapsedState(li, !isCollapsed);

                        if (!isCollapsed) {
                            // collapsing
                            items.style.maxHeight = '0';
                        } else {
                            // expanding
                            items.style.maxHeight = items.scrollHeight + 'px';
                        }

                        localStorage.setItem('filament-nav-group-' + groupKey, !isCollapsed ? 'collapsed' : 'expanded');
                    });

                    // handle transitionend to reset max-height when expanded
                    items.addEventListener('transitionend', function (e) {
                        if (! li.classList.contains('collapsed')) {
                            items.style.maxHeight = '999px';
                        }
                    });
                });
            });
        </script>
    </ol>
</nav>
