<?php

namespace App\Livewire\Akun\Mahasiswa;

use App\Models\locate;
use Livewire\Component;
use App\Models\AkunMahasiswa;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Crypt;

class AkunMahasiswaEdit extends Component
{
    #[Validate('required')]
    public $nim = '';

    #[Validate('required')]
    public $nama = '';

    public $password = '';

    #[Validate('required')]
    public $locate_id = '';
    
    #[Validate('required')]
    public $tglLahir = '';

    public $akunMahasiswa_id;

    public function mount($id)
    {
        $this->akunMahasiswa_id = $id;
        $akunMahasiswa = AkunMahasiswa::find($id);

        $this->nama = $akunMahasiswa->nama;
        $this->nim = $akunMahasiswa->nim;
        $this->locate_id = $akunMahasiswa->locate_id;
        $this->tglLahir = $akunMahasiswa->tglLahir;
    }

    public function save()
    {
        $this->validate();
        $pwd = $this->password;
        $encryptedPassword  = Crypt::encryptString($pwd);
        if ($this->password === "") {
            AkunMahasiswa::find($this->akunMahasiswa_id)->update([
                'nama' => $this->nama,
                'nim' => $this->nim,
                // 'password' => BCRYPT($this->password),
                'locate_id' => $this->locate_id,
                'tglLahir' => $this->tglLahir,
            ]);
        } else {
            AkunMahasiswa::find($this->akunMahasiswa_id)->update([
                'nama' => $this->nama,
                'nim' => $this->nim,
                'password' => $encryptedPassword,
                'locate_id' => $this->locate_id,
                'tglLahir' => $this->tglLahir,
            ]);
        }


        session()->flash('status', 'successfully updated');
        return $this->redirectRoute('mahasiswa.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $locates = locate::all();
        return view('livewire.akun.mahasiswa.akun-mahasiswa-edit',compact('locates'));
    }
}
