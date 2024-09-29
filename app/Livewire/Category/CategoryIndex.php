<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Layout;

class CategoryIndex extends Component
{
    public function delete($id)
    {
        Category::find($id)->delete();
        session()->flash('status', 'Successfully Deleted.');
    }

    #[Layout('layouts.app')] 
    public function render()
    {
        $categories = Category::all();
        return view('livewire.category.category-index',compact('categories'));
    }
}
