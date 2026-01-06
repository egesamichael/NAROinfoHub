<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\SubTopic;
use App\Models\Topic;

class SubTopicManager extends Component
{
    use WithPagination;

    public $topic_id;
    public $name;
    public $slug;
    public $description;
    public $status = true;
    public $editingId = null;
    public $modalOpen = false;

    protected $rules = [
        'topic_id' => 'required|exists:topics,id',
        'name' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'status' => 'boolean',
    ];

    public function create()
    {
        $this->resetForm();
        $this->modalOpen = true;
    }

    public function edit($id)
    {
        $s = SubTopic::findOrFail($id);
        $this->editingId = $s->id;
        $this->topic_id = $s->topic_id;
        $this->name = $s->name;
        $this->slug = $s->slug;
        $this->description = $s->description;
        $this->status = $s->status;
        $this->modalOpen = true;
    }

    public function save()
    {
        $this->validate();

        if ($this->editingId) $s = SubTopic::findOrFail($this->editingId);
        else $s = new SubTopic();

        $s->topic_id = $this->topic_id;
        $s->name = $this->name;
        $s->slug = $this->slug ?: \Str::slug($this->name);
        $s->description = $this->description;
        $s->status = $this->status;
        $s->save();

        $this->resetForm();
        $this->modalOpen = false;
        session()->flash('message', 'Sub-topic saved.');
    }

    public function delete($id)
    {
        SubTopic::findOrFail($id)->delete();
        session()->flash('message', 'Sub-topic deleted.');
    }

    protected function resetForm()
    {
        $this->reset(['topic_id','name','slug','description','status','editingId']);
        $this->resetValidation();
    }

    public function render()
    {
        $subs = SubTopic::with('topic')->orderBy('name')->paginate(10);
        $topics = Topic::orderBy('name')->get();
        return view('livewire.admin.sub-topic-manager', compact('subs', 'topics'));
    }
}
