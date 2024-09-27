<?php

namespace App\Livewire\Lokasi;

use App\Models\locate;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class LokasiEdit extends Component
{
    #[Validate('required')] 
    public $nama = '';
    public $locate_id;

    public function mount($id)
    {
        $this->locate_id = $id;
        $akunMahasiswa = locate::find($id);

        $this->nama = $akunMahasiswa->nama;
    }

    public function save()
    {
        $this->validate(); 
        locate::find($this->locate_id)->update([
            'nama' => $this->nama,
        ]);
        session()->flash('status', 'successfully updated');
        return $this->redirectRoute('locate.index',navigate:true);
    }

    #[Layout('layouts.app')] 
    public function render()
    {
        return view('livewire.lokasi.lokasi-edit');
    }
}
