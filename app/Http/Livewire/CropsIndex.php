<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CropsIndex extends Component
{
    public $topics;
    public $selectedTopicId = null;
    public $subTopics = [];
    public $selectedSubTopicId = null;
    public $detail = null;

    public function mount()
    {
        $this->topics = \App\Models\Topic::orderBy('name')->get();

        if ($this->topics->isNotEmpty()) {
            $this->selectTopic($this->topics->first()->id);
        }
    }

    public function selectTopic($id)
    {
        $this->selectedTopicId = $id;
        $this->subTopics = \App\Models\SubTopic::where('topic_id', $id)->orderBy('name')->get();

        $this->selectedSubTopicId = $this->subTopics->first()?->id;

        if ($this->selectedSubTopicId) {
            $this->loadDetail($this->selectedSubTopicId);
        } else {
            $this->detail = null;
        }
    }

    public function selectSubTopic($id)
    {
        $this->selectedSubTopicId = $id;
        $this->loadDetail($id);
    }

    protected function loadDetail($subTopicId)
    {
        $this->detail = \App\Models\TopicDetail::where('sub_topic_id', $subTopicId)
            ->orderBy('updated_at', 'desc')
            ->first();
    }

    public function render()
    {
        return view('livewire.crops-index');
    }
}
