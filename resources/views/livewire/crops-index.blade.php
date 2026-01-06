<div class="max-w-6xl mx-auto px-4">

  <style>
    /* Fallback responsive layout in case Tailwind responsive classes are not compiled */
    .crops-grid { display:block; gap:1rem; }
    .crops-left, .crops-mid, .crops-right { background:#fff; border-radius:0.375rem; box-shadow:0 1px 2px rgba(0,0,0,0.05); padding:1rem; }
    .crops-left .list, .crops-mid .list { max-height:60vh; overflow:auto; }

    @media (min-width: 640px) {
      .crops-grid { display:grid; grid-template-columns: 240px 240px 1fr; align-items:start; }
    }
  </style>

  <div class="crops-grid">
    <div class="crops-left">
      <h3 class="font-bold mb-2">Topic</h3>
      <div class="list">
        <ul>
          @foreach($topics as $topic)
            <li class="mb-2">
              <button wire:click="selectTopic({{ $topic->id }})" class="text-left w-full px-2 py-1 rounded hover:bg-gray-100 {{ $selectedTopicId == $topic->id ? 'bg-green-100' : '' }}">
                {{ $topic->name }}
              </button>
            </li>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="crops-mid">
      <h3 class="font-bold mb-2">Sub-Topic</h3>
      <div class="list">
        <ul>
          @foreach($subTopics as $sub)
            <li class="mb-2">
              <button wire:click="selectSubTopic({{ $sub->id }})" class="text-left w-full px-2 py-1 rounded hover:bg-gray-100 {{ $selectedSubTopicId == $sub->id ? 'bg-yellow-100' : '' }}">
                {{ $sub->name }}
              </button>
            </li>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="crops-right">
      <h3 class="font-bold mb-2">Technology Description</h3>

      <div>
        @if($detail)
          <div class="text-sm text-gray-700 mb-2">
            <strong>{{ $detail->title ?? ($detail->subTopic->name ?? '') }}</strong>
          </div>

          <div class="prose max-w-none">
            {!! nl2br(e($detail->content)) !!}
          </div>

          @if($detail->attributes)
            <div class="mt-4 bg-gray-50 p-3 rounded">
              <h4 class="font-semibold">Attributes</h4>
              <ul class="text-sm">
                @foreach($detail->attributes as $k => $v)
                  <li><strong>{{ ucfirst($k) }}:</strong> {{ $v }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        @else
          <div class="text-gray-500">Select a sub-topic to see details.</div>
        @endif
      </div>
    </div>
  </div>
</div>
