<?php

namespace App\Livewire\Akun\Mahasiswa;

use App\Imports\AkunMahasiswaImport;
use App\Models\locate;
use Livewire\Component;
use App\Models\AkunMahasiswa;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Crypt;
use Maatwebsite\Excel\Facades\Excel;

class AkunMahasiswaCreate extends Component
{
    #[Validate('required')]
    public $nim = '';

    #[Validate('required')]
    public $nama = '';

    #[Validate('required')]
    public $password = '';

    #[Validate('required')]
    public $locate_id = '';

    #[Validate('required')]
    public $tglLahir = '';

    public function save()
    {
        $this->validate();
        $pwd = $this->password;
        $encryptedPassword  = Crypt::encryptString($pwd);
        AkunMahasiswa::create([
            'nim' => $this->nim,
            'nama' => $this->nama,
            'password' => $encryptedPassword,
            'locate_id' => $this->locate_id,
            'tglLahir' => $this->tglLahir,
        ]);
        session()->flash('status', 'successfully added');
        // return redirect()->to('/akunMahasiswa');
        return $this->redirectRoute('mahasiswa.index', navigate: true);
    }

    

    #[Layout('layouts.app')]
    public function render()
    {
        $locates = locate::all();
        return view('livewire.akun.mahasiswa.akun-mahasiswa-create', compact('locates'));
    }
}
