<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $user;
    public $post;
    public $caption;
    public $date;
    public $avatar;

    public function mount($post)
    {
        $this->user = $post->user->name;
        $this->post = $post->image;
        $this->caption = $post->description;
        $this->avatar = $post->user->avatar;
        $this->date = $post->created_at->diffForHumans();
    }
    public function render()
    {
        return view('livewire.card');
    }
}
