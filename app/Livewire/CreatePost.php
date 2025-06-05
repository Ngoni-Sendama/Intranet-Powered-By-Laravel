<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $post = '';
    public $category = '';
    public $location = '';
    public $media = [];

    protected $rules = [
        'post' => 'required|string|max:1000',
        'category' => 'required|string|max:255',
        'location' => 'nullable|string|max:255',
        'media.*' => 'nullable|file|max:10240', // Max 10MB each
    ];

    public function submit()
    {
        $this->validate();

        $uploadedFiles = [];

        if ($this->media) {
            foreach ($this->media as $file) {
                $uploadedFiles[] = $file->store('posts', 'public');
            }
        }

        Post::create([
            'user_id' => auth()->id(),
            'post' => $this->post,
            'category' => $this->category,
            'location' => $this->location,
            'media' => json_encode($uploadedFiles),
            'likes' => 0,
        ]);

        $this->reset(['post', 'category', 'location', 'media']);
        session()->flash('success', 'Post created successfully!');
        return redirect()->route('dashboard'); // or 'posts.index' etc.

    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
