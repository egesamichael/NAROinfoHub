<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Topic;
use App\Models\SubTopic;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TopicManager extends Component
{
    use WithFileUploads, WithPagination;

    public $name;
    public $slug;
    public $description;
    public $image;
    public $order = 0;
    public $status = true;
    public $editingId = null;
    public $modalOpen = false;

    public $subtopics = [];
    public $imagePreview = null;

    protected $rules = [
        'name' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|max:1024',
        'order' => 'nullable|integer',
        'status' => 'boolean',
        'subtopics.*.name' => 'required|string|max:255',
        'subtopics.*.order' => 'nullable|integer',
        'subtopics.*.status' => 'boolean',
    ];

    public function mount()
    {
        // nothing for now
    }

    public function create()
    {
        $this->resetForm();
        $this->modalOpen = true;
    }

    public function edit($id)
    {
        $topic = Topic::findOrFail($id);
        $this->editingId = $topic->id;
        $this->name = $topic->name;
        $this->slug = $topic->slug;
        $this->description = $topic->description;
        $this->order = $topic->order;
        $this->status = $topic->status;

        // load subtopics into an editable array
        $this->subtopics = $topic->subTopics()->orderBy('order')->get()->map(function($s) {
            return [
                'id' => $s->id,
                'name' => $s->name,
                'slug' => $s->slug,
                'description' => $s->description,
                'order' => $s->order,
                'status' => (bool)$s->status,
                'deleted' => false,
            ];
        })->toArray();

        $this->imagePreview = $topic->image ? Storage::url($topic->image) : null;

        $this->modalOpen = true;
    }

    public function save()
    {
        $this->validate();

        if ($this->editingId) {
            $topic = Topic::findOrFail($this->editingId);
        } else {
            $topic = new Topic();
        }

        $topic->name = $this->name;
        $topic->slug = $this->slug ?: Str::slug($this->name);
        $topic->description = $this->description;
        $topic->order = $this->order ?: 0;
        $topic->status = $this->status;

        if ($this->image) {
            $path = $this->image->store('topics', 'public');
            $topic->image = $path;
            $this->imagePreview = Storage::url($path);
        }

        $topic->save();

        // process subtopics array
        foreach ($this->subtopics as $row) {
            if (!empty($row['deleted'])) {
                if (!empty($row['id'])) {
                    SubTopic::destroy($row['id']);
                }
                continue;
            }

            if (!empty($row['id'])) {
                $s = SubTopic::find($row['id']);
                if ($s) {
                    $s->update([
                        'name' => $row['name'],
                        'slug' => $row['slug'] ?: Str::slug($row['name']),
                        'description' => $row['description'] ?? null,
                        'order' => $row['order'] ?? 0,
                        'status' => $row['status'] ?? true,
                    ]);
                }
            } else {
                SubTopic::create([
                    'topic_id' => $topic->id,
                    'name' => $row['name'],
                    'slug' => $row['slug'] ?: Str::slug($row['name']),
                    'description' => $row['description'] ?? null,
                    'order' => $row['order'] ?? 0,
                    'status' => $row['status'] ?? true,
                ]);
            }
        }

        $this->resetForm();
        $this->modalOpen = false;
        session()->flash('message', 'Topic saved.');
    }

    public function delete($id)
    {
        Topic::findOrFail($id)->delete();
        session()->flash('message', 'Topic deleted.');
    }

    public function addSubtopicRow()
    {
        $this->subtopics[] = [
            'id' => null,
            'name' => '',
            'slug' => '',
            'description' => null,
            'order' => 0,
            'status' => true,
            'deleted' => false,
        ];
    }

    public function removeSubtopicRow($index)
    {
        if (isset($this->subtopics[$index]['id']) && $this->subtopics[$index]['id']) {
            $this->subtopics[$index]['deleted'] = true;
        } else {
            array_splice($this->subtopics, $index, 1);
        }
    }

    protected function resetForm()
    {
        $this->reset(['name','slug','description','image','order','status','editingId','subtopics','imagePreview']);
        $this->resetValidation();
    }

    public function render()
    {
        $topics = Topic::orderBy('order')->paginate(10);
        return view('livewire.admin.topic-manager', compact('topics'));
    }
}
