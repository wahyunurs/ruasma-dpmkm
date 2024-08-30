<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Aspirasi;
use App\Models\Mahasiswa;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    use UploadTrait;

    protected $mahasiswa;
    protected $aspirasi;

    // Constructor Function for HomeController
    public function __construct()
    {
        $this->mahasiswa = new Mahasiswa();
        $this->aspirasi = new Aspirasi();
    }

    public function index(Request $request)
    {

        /*
            Fungsi untuk mengatur semua alur data,
            ataupun konfigurasi landing page yang
            akan ditampilkan.
        */

        $view = $request->view;
        $data = [
            "view" => $view
        ];
        if ($view == "Home" || $view == null) {
            if ($view == null) {
                $view = "Home";
            }
            $data["view"] = $view;
            return view('Landing/index', $data);
        } else if ($view == "Aspirasi") {
            $data["view"] = $view;
            return view('Landing/aspirasi', $data);
        } else if ($view == "About") {
            $data['view'] = $view;
            return view('Landing/about', $data);
        }
    }

    public function sendAspirasi(Request $request)
    {

        /*
            Fungsi untuk mengirim atau menyimpan data
            Aspirasi yang dimasukkan oleh Mahasiswa
            Kedalam Database
        */

        if ($request->hasFile('umum-gambar')) {
            $request->validate([
                'umum-gambar' => 'image|mimes:jpg,png,jpeg',
            ]);
            $file = $request->file('umum-gambar');
            $filename = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('assets/img/aspirasi/umum'), $filename);
        }

        if ($request->hasFile('usc-gambar')) {
            $request->validate([
                'usc-gambar' => 'image|mimes:jpg,png,jpeg',
            ]);
            $file = $request->file('usc-gambar');
            $filename = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('assets/img/aspirasi/usc'), $filename);
        }

        $data_mhs = [
            "nim" => $request->nim_mhs,
            "nama" => $request->nama_mhs,
            "fakultas" => $request->fakultas_mhs,
        ];

        // dd($data_mhs);

        $this->mahasiswa->create($data_mhs);

        $mid = $this->mahasiswa->where('nim', $request->nim_mhs)->first();
        
        // dd($mid);

        $data_aspirasi = [
            "jenis_aspirasi" => $request->jenis_aspirasi,
            "aspirasi_usc" => $request->usc_aspirasi,
            "aspirasi_umum" => $request->umum_aspirasi,
            "gambar_usc" => $request->hasFile('usc_gambar') ? $filename : null,
            "gambar_umum" => $request->hasFile('umum_gambar') ? $filename : null,
            "mid" => $mid['mid'],
            "created_at" => Carbon::now(),
        ];

        // dd($data_aspirasi);

        $this->aspirasi->create($data_aspirasi);

        return redirect(url('/home?view=Aspirasi'));
    }
}
