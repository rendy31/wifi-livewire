<?php

namespace App\Livewire\Akun\Mahasiswa;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AkunMahasiswaImport as ImportsAkunMahasiswaImport;

class AkunMahasiswaImport extends Component
{
    use WithFileUploads;

    public $file;

    public function import()
    {
        $this->validate([
            'file' => 'required|mimes:xlsx,csv'
        ]);

        Excel::import(new ImportsAkunMahasiswaImport, $this->file->getRealPath());

        session()->flash('status', 'Data berhasil diimport.');
    }
    
    #[Layout('layouts.app')] 
    public function render()
    {
        return view('livewire.akun.mahasiswa.akun-mahasiswa-import');
    }
}
