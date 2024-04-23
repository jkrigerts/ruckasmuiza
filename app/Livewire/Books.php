<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Book;

class Books extends Component
{
    use WithPagination;

    public $query = '';
 
    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.books', [
            'books' => Book::where('title', 'like', '%'.$this->query.'%')
                            ->orWhere('author', 'like', '%'.$this->query.'%')
                            ->paginate(12),
        ]);
    }
}
