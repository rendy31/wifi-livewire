<?php

namespace App\Livewire\Akun\Mahasiswa;

use Livewire\Component;
use Livewire\Attributes\Layout;

class AkunMahasiswaEdit extends Component
{
    #[Layout('layouts.app')] 
    public function render()
    {
        return view('livewire.akun.mahasiswa.akun-mahasiswa-edit');
    }
}
