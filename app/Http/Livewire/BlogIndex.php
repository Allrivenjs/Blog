<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Livewire\WithPagination;

class BlogIndex extends Component
{
    use WithPagination;
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
            $posts = Post::where('status', 2)
                ->where('name', 'LIKE', '%' . $this->search . '%')
                ->latest('id')->paginate(8);
        return view('livewire.blog-index', compact('posts'));
    }
}
