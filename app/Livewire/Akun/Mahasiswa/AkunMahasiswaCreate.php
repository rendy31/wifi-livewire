<?php

namespace App\Livewire\Akun\Mahasiswa;

use Livewire\Component;
use App\Models\AkunMahasiswa;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class AkunMahasiswaCreate extends Component
{
    #[Validate('required')] 
    public $nim = '';

    #[Validate('required')] 
    public $nama = '';

    #[Validate('required')] 
    public $password = '';

    #[Validate('required')] 
    public $lokasi = '';

    public function save()
    {
        $this->validate(); 
        AkunMahasiswa::create([
            'nim' => $this->nim,
            'nama' => $this->nama,
            'password' => BCRYPT($this->password),
            'lokasi' => $this->lokasi,
        ]);
        session()->flash('status', 'successfully added');
        // return redirect()->to('/akunMahasiswa');
        return $this->redirectRoute('akun.mahasiswa.index',navigate:true);
    }

    #[Layout('layouts.app')] 
    public function render()
    {
        return view('livewire.akun.mahasiswa.akun-mahasiswa-create');
    }
}
