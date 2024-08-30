<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Aspirasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function home()
    {
        $mahasiswas = Mahasiswa::all();
        return view('User.home.index')->with('mahasiswas', $mahasiswas);
    }
    public function aspirasi()
    {
        return view('User/aspirasi/index');
    }
    public function about()
    {
        return view('User/about/index');
    }

    public function sendAspirasi(Request $request)
    {
        // Mengecek apakah NIM sudah ada di database
        $existingMahasiswa = Mahasiswa::where('nim', $request->nim)->first();

        if ($existingMahasiswa) {
            return redirect()->route('home')->with('error', 'Anda sudah mengisi form.')->withErrors(['nim' => 'Anda sudah mengisi form.']);
        }

        // Validasi formulir
        $validator = Validator::make($request->all(), [
            'nim' => 'required|string|max:20',
            'nama' => 'required|string|max:100',
            'fakultas' => 'required|string|max:50',
            'jenis_aspirasi' => 'required|string|max:50',
            'aspirasi_usc' => 'required|string',
            'aspirasi_umum' => 'required|string',
            'gambar_kerusakan_usc' => 'image|mimes:jpeg,png,jpg,gif',
            'gambar_kerusakan_umum' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        // Jika validasi gagal, kembali ke halaman sebelumnya dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Membuat entitas Mahasiswa
        $dataMahasiswa = Mahasiswa::create([
            "nim" => $request->nim,
            "nama" => $request->nama,
            "fakultas" => $request->fakultas,
        ]);

        // Mengecek dan menyimpan gambar kerusakan USC
        if ($request->hasFile("gambar_kerusakan_usc")) {
            $fileUsc = $request->file("gambar_kerusakan_usc");
            $imageNameUsc = time() . '_' . $fileUsc->getClientOriginalName();
            $fileUsc->move(\public_path("gambar_kerusakan_usc/"), $imageNameUsc);
        } else {
            $imageNameUsc = null;
        }

        // Mengecek dan menyimpan gambar kerusakan UMUM
        if ($request->hasFile("gambar_kerusakan_umum")) {
            $fileUmum = $request->file("gambar_kerusakan_umum");
            $imageNameUmum = time() . '_' . $fileUmum->getClientOriginalName();
            $fileUmum->move(\public_path("gambar_kerusakan_umum/"), $imageNameUmum);
        } else {
            $imageNameUmum = null;
        }

        // Membuat entitas Aspirasi
        Aspirasi::create([
            'jenis_aspirasi' => $request->jenis_aspirasi,
            'aspirasi_usc' => $request->aspirasi_usc,
            'aspirasi_umum' => $request->aspirasi_umum,
            'gambar_kerusakan_usc' => $imageNameUsc,
            'gambar_kerusakan_umum' => $imageNameUmum,
            'mid' => $dataMahasiswa->mid,
        ]);

        return redirect()->route('home')->with('success', 'Aspirasi berhasil dikirim!');
    }
}
