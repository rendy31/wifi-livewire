<?php

namespace App\Livewire\Akun\Mahasiswa;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AkunMahasiswa;
use Livewire\Attributes\Layout;

class AkunMahasiswaIndex extends Component
{
    use WithPagination;
    #[Layout('layouts.app')] 
    public function render()
    {
        $akunMahasiswas = AkunMahasiswa::latest()->paginate(2);
        return view('livewire.akun.mahasiswa.akun-mahasiswa-index', compact('akunMahasiswas'));
    }
}
