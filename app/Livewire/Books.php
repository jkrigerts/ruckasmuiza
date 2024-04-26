<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Book;
use Illuminate\Database\Eloquent\Builder;

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
            'books' => Book::where('visible', true)
                            ->where(function (Builder $query) {
                                $query->where('title', 'like', '%'.$this->query.'%')
                                      ->orWhere('author', 'like', '%'.$this->query.'%');
                            })
                            ->orderByRaw("-order_number DESC")
                            ->paginate(12),
        ]);
    }
}
