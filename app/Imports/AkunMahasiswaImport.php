<?php

namespace App\Imports;

use App\Models\AkunMahasiswa;
use Illuminate\Support\Facades\Crypt;
use Maatwebsite\Excel\Concerns\ToModel;

class AkunMahasiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AkunMahasiswa([
            //IMPORT AKUN MAHASISWA
            'nim'     => $row[0],
            'nama'    => $row[1], 
            'tglLahir'    => $row[2], 
            // 'tglLahir'    => date($row[2]), 
            // 'password' => Hash::make($row[3]),
            'password' => Crypt::encryptString($row[3]),
            'locate_id'    => $row[4], 
        ]);
    }
}
