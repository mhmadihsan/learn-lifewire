<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public $comments = [
        [
            "body"=>"Lorem Ipsum is simply dummbeen  of Lorem Ipsum.",
            "author"=>"Admin",
            "created_at"=>"1 minutes ago"
        ]
    ];
    public $newComment; 

    public function render() 
    {
        return view('livewire.comments');
    }

    public function addComment(){
        $addcomment = [
            "body"=>$this->newComment,
            "author"=>"Guest",
            "created_at"=>Carbon::now()->diffForHumans()
        ];
        array_push($this->comments,$addcomment);
        $this->newComment = '';
    }
}
