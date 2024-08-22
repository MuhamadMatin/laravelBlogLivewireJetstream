<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    #[Url()]
    public $sort = 'desc';
    public $search = '';

    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->resetPage();
    }

    public function reserSearch()
    {
        $this->search = '';
        $this->resetPage();
    }

    #[Computed()]
    public function posts()
    {
        return Post::orderBy('published_at', $this->sort)
            ->where('title', 'like', '%' . $this->search . '%')
            ->paginate(5);
    }

    public function render()
    {
        return view('livewire.post-list');
    }
}
