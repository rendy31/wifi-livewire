<?php

namespace App\Livewire\Akun\Mahasiswa;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AkunMahasiswa;
use Livewire\Attributes\Layout;

class AkunMahasiswaIndex extends Component
{
    use WithPagination;

    public function delete($id)
    {
        AkunMahasiswa::find($id)->delete();
        session()->flash('status', 'Successfully Deleted.');
    }


    #[Layout('layouts.app')] 
    public function render()
    {
        // $akunMahasiswas = AkunMahasiswa::latest()->paginate(25);
        $akunMahasiswas = AkunMahasiswa::all();
        return view('livewire.akun.mahasiswa.akun-mahasiswa-index', compact('akunMahasiswas'));
    }
}
