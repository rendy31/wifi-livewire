<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class CategoryCreate extends Component
{
    #[Validate('required')] 
    public $name = '';

    public function save()
    {
        $this->validate(); 
        Category::create([
            'name' => $this->name,
        ]);
        session()->flash('status', 'successfully added');
        // return redirect()->to('/akunMahasiswa');
        return $this->redirectRoute('category.index',navigate:true);
    }
    
    #[Layout('layouts.app')] 
    public function render()
    {
        return view('livewire.category.category-create');
    }
}
