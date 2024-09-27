<?php

namespace App\Livewire\Lokasi;

use App\Models\locate;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class LokasiCreate extends Component
{
    #[Validate('required')] 
    public $nama = '';

    public function save()
    {
        $this->validate(); 
        locate::create([
            'nama' => $this->nama,
        ]);
        session()->flash('status', 'successfully added');
        // return redirect()->to('/akunMahasiswa');
        return $this->redirectRoute('locate.index',navigate:true);
    }
    
    #[Layout('layouts.app')] 
    public function render()
    {
        return view('livewire.lokasi.lokasi-create');
    }
}
