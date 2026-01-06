<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\TopicDetail;
use App\Models\SubTopic;
use App\Models\Topic;

class TopicDetailManager extends Component
{
    use WithPagination, WithFileUploads;

    public $sub_topic_id;
    public $title;
    public $content;
    public $attributes = [];
    public $image;
    public $editingId = null;
    public $modalOpen = false;

    protected $rules = [
        'sub_topic_id' => 'required|exists:sub_topics,id',
        'title' => 'required|string|max:255',
        'content' => 'nullable|string',
        'attributes' => 'nullable|array',
        'image' => 'nullable|image|max:2048',
    ];

    public function create()
    {
        $this->resetForm();
        $this->modalOpen = true;
    }

    public function edit($id)
    {
        $d = TopicDetail::findOrFail($id);
        $this->editingId = $d->id;
        $this->sub_topic_id = $d->sub_topic_id;
        $this->title = $d->title;
        $this->content = $d->content;
        $this->attributes = $d->attributes ?: [];
        $this->modalOpen = true;
    }

    public function save()
    {
        $this->validate();

        if ($this->editingId) $d = TopicDetail::findOrFail($this->editingId);
        else $d = new TopicDetail();

        $d->sub_topic_id = $this->sub_topic_id;
        $d->title = $this->title;
        $d->content = $this->content;
        $d->attributes = $this->attributes ?: null;

        if ($this->image) {
            $path = $this->image->store('topic_details', 'public');
            $d->image = $path;
        }

        $d->save();

        $this->resetForm();
        $this->modalOpen = false;
        session()->flash('message', 'Detail saved.');
    }

    public function delete($id)
    {
        TopicDetail::findOrFail($id)->delete();
        session()->flash('message', 'Detail deleted.');
    }

    protected function resetForm()
    {
        $this->reset(['sub_topic_id','title','content','attributes','image','editingId']);
        $this->resetValidation();
    }

    public function render()
    {
        $details = TopicDetail::with('subTopic.topic')->orderBy('created_at','desc')->paginate(10);
        $topics = Topic::orderBy('order')->get();
        $subtopics = SubTopic::orderBy('order')->get();
        return view('livewire.admin.topic-detail-manager', compact('details','topics','subtopics'));
    }
}
