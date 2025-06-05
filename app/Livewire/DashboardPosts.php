<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class DashboardPosts extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = Post::latest()->get();
    }

    public function like(Post $post)
    {
        $post->increment('likes');
        $post->refresh();

        // Update posts collection to reflect changes
        $this->posts = $this->posts->map(function ($p) use ($post) {
            return $p->id === $post->id ? $post : $p;
        });
    }

    public function render()
    {
        return view('livewire.dashboard-posts', [
            'posts' => Post::latest()->get(),
        ]);
    }
}
