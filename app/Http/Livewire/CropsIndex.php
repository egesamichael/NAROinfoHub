<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Crop;
use App\Models\CropCategory;
use App\Models\CropItem;

class CropsIndex extends Component
{
    public $topics;
    public $crops;
    public $selectedTopicId = null;
    public $selectedCropId = null;
    public $subTopics = [];
    public $selectedSubTopicId = null;
    public $detail = null;
    public $varieties = [];
    public $showStats = true;
    public $statistics = [];
    public $selectedStatisticId = null;
    public $statDetail = null;
    public $categories = [];
    public $selectedCategoryId = null;
    public $items = [];
    public $selectedItemId = null;
    public $showVarietyColumn = false;

    public function mount()
    {
        // load Topics and Crops using Collections for internal checks,
        // but expose them as arrays on the public properties (Livewire requires simple types).
        $topicsCollection = \App\Models\Topic::orderBy('name')->get();
        $this->topics = $topicsCollection->toArray();

        // load crops from their own table (keep a collection for checks)
        $cropsCollection = Crop::orderBy('name')->get();
        $this->crops = $cropsCollection->toArray();

        // Simple in-memory list of statistics. Replace with DB query if you have a Statistics model/table.
        $this->statistics = [
            ['id' => 1, 'title' => 'Seed production statistics', 'content' => 'Seed production stats content...'],
            ['id' => 2, 'title' => 'Crop production statistics', 'content' => 'Crop production stats content...'],
            ['id' => 3, 'title' => 'Exports and imports statistics', 'content' => 'Export/import stats...'],
            ['id' => 4, 'title' => 'Market pricing', 'content' => 'Market pricing content...'],
            ['id' => 5, 'title' => 'Weather forecast', 'content' => 'Weather forecast content...'],
        ];

        // select first statistic by default
        $this->selectedStatisticId = $this->statistics[0]['id'] ?? null;
        if ($this->selectedStatisticId) $this->loadStatistic($this->selectedStatisticId);

        // do NOT auto-switch to browse mode on mount. Load topics/crops but only select the
        // first topic/crop without triggering user-action behavior that hides statistics.
        if ($topicsCollection->isNotEmpty()) {
            $this->selectedTopicId = $topicsCollection->first()->id;
        }
        if ($cropsCollection->isNotEmpty()) {
            $this->selectedCropId = $cropsCollection->first()->id;
        }
    }

    public function selectTopic($id, $fromUser = true)
    {
        $this->selectedTopicId = $id;
        // when a crop/topic is clicked by the user we switch out of statistics mode
        if ($fromUser) {
            $this->showStats = false;
        }
        $this->subTopics = \App\Models\SubTopic::where('topic_id', $id)->orderBy('name')->get();

        $this->selectedSubTopicId = $this->subTopics->first()?->id;

        if ($this->selectedSubTopicId) {
            $this->loadDetail($this->selectedSubTopicId);
        } else {
            $this->detail = null;
        }
    }

    // select a crop from the left column
    public function selectCrop($id)
    {
        $this->selectedCropId = $id;
        // user-action: switch out of stats mode
        $this->showStats = false;

        // for now we don't have relations between crops and subTopics. Keep categories empty.
        $this->subTopics = collect();
        $this->detail = null;

        // load categories for this crop (as arrays)
        $this->categories = CropCategory::where('crop_id', $id)->orderBy('name')->get()->toArray();
        $this->selectedCategoryId = $this->categories[0]['id'] ?? null;
    }

    public function selectCategory($id)
    {
        $this->selectedCategoryId = $id;
        // load items for this category
        $items = CropItem::where('crop_category_id', $id)->orderBy('order')->get();
        // expose items as arrays for Livewire
        $this->items = $items->toArray();

        // if this category has an explicit `type` column set to 'variety', show the variety column
        $category = CropCategory::find($id);
        $this->showVarietyColumn = $category && ($category->type === 'variety');

        $first = $items->first();
        $this->selectedItemId = $first?->id;

        if ($this->showVarietyColumn) {
            $this->varieties = $items->toArray();
            $this->detail = $first ? $first->toArray() : null;
        } else {
            // for non-variety categories show the details column only — use first item as detail
            $this->varieties = [];
            $this->detail = $first ? $first->toArray() : null;
        }
    }

    public function selectItem($id)
    {
        $this->selectedItemId = $id;
        $item = CropItem::find($id);
        $this->detail = $item ? $item->toArray() : null;
    }

    public function selectSubTopic($id)
    {
        $this->selectedSubTopicId = $id;
        $this->loadDetail($id);
    }

    public function selectStatistic($id)
    {
        $this->selectedStatisticId = $id;
        $this->loadStatistic($id);
    }

    protected function loadStatistic($id)
    {
        $this->statDetail = collect($this->statistics)->firstWhere('id', $id);
    }

    public function backToStatistics()
    {
        $this->showStats = true;
        // keep current statistic selection
    }

    protected function loadDetail($subTopicId)
    {
        $model = \App\Models\TopicDetail::where('sub_topic_id', $subTopicId)
            ->orderBy('updated_at', 'desc')
            ->first();

        $this->detail = $model ? $model->toArray() : null;

        // load related details as "varieties" list (other details under this subtopic) as arrays
        $this->varieties = \App\Models\TopicDetail::where('sub_topic_id', $subTopicId)
            ->orderBy('title')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.crops-index');
    }
}
