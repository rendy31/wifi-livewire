<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunMahasiswa;
use Illuminate\Support\Facades\Crypt;

class InfoController extends Controller
{
    public function index()
    {
        return view('info.form');
    }

    public function show(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'tanggal' => 'required|numeric',
            'bulan' => 'required',
            'tahun' => 'required|numeric',
        ]);
        // Gabungkan tanggal lahir menjadi format YYYY-MM-DD
        $tglLahir = $request->tahun . '-' . $request->bulan . '-' . $request->tanggal;

        $akun = AkunMahasiswa::where('nim', $request->nim)->where('tgllahir', $tglLahir)->first();
        // Cek apakah data ditemukan
        if ($akun) {
            // Jika data cocok, tampilkan data mahasiswa
            $decryptedPassword = Crypt::decryptString($akun->password);
            return view('info.show', compact('akun','decryptedPassword'));
        } else {
            // Jika tidak ada data yang cocok
            // return response()->json([
            //     'status' => 'error',
            //     'message' => 'NIM atau Tanggal Lahir tidak ditemukan!',
            // ], 404);
            session()->flash('status', 'NIM atau Tanggal Lahir tidak ditemukan!');
            // return view('info.form');
            return redirect()->route('info.index');
        }
    }
}
