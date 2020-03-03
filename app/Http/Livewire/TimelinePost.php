<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Post;

class TimelinePost extends Component
{
    public function render()
    {
        $posts = Post::with(['likes', 'user'])
                    ->orderBy('id', 'desc')
                    ->take(10)
                    ->get();
        return view('livewire.timeline-post', ['posts' => $posts]);
    }
}
