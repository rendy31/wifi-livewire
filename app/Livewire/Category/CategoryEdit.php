<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class CategoryEdit extends Component
{
    #[Validate('required')] 
    public $name = '';
    public $category_id;

    public function mount($id)
    {
        $this->category_id = $id;
        $akunMahasiswa = Category::find($id);

        $this->name = $akunMahasiswa->name;
    }

    public function save()
    {
        $this->validate(); 
        Category::find($this->category_id)->update([
            'name' => $this->name,
        ]);
        session()->flash('status', 'successfully updated');
        return $this->redirectRoute('category.index',navigate:true);
    }

    #[Layout('layouts.app')] 
    public function render()
    {
        return view('livewire.category.category-edit');
    }
}
