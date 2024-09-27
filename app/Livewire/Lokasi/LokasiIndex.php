<?php

namespace App\Livewire\Lokasi;

use App\Models\locate;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class LokasiIndex extends Component
{
    use WithPagination;

    public function delete($id)
    {
        locate::find($id)->delete();
        session()->flash('status', 'Successfully Deleted.');
    }
    
    #[Layout('layouts.app')] 
    public function render()
    {
        $locates = locate::orderBy('id', 'asc')->paginate(5);
        return view('livewire.lokasi.lokasi-index',compact('locates'));
    }
}
