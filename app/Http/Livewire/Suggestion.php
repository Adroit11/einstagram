<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\User;
Use App\Post;

class Suggestion extends Component
{
    public function render()
    {
        $suggestion = User::all()->random(5);
        $stories = Post::with('user')->take(3)->get();
        return view('livewire.suggestion', ['user' => auth()->user(), 'suggestions' => $suggestion, 'stories' => $stories]);
    }
}
