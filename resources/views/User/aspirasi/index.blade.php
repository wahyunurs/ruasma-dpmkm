@extends('User.Particles.main')

@section('header')
@include('User.Particles.header')
@endsection

@section('content')
<!-- contact section -->
<section class="contact_section long_section">
    <div class="container">
        <div class="row">
            <div class="">
                <div class="">
                    @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                    @endif
                    <div class="heading_container">
                        <h2>
                            Sampaikan Aspirasimu!
                        </h2>
                    </div>
                    <form action="{{ route('post.sendAspirasi') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex flex-row">
                            <div class="container">
                                <div class="form-floating mb-3">
                                    <input type="text" name="nim" class="form-control" id="nimInput" placeholder="" required>
                                    <label for="nimInput">Nomor Induk Mahasiswa</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="nama" class="form-control" id="namaInput" placeholder="" required>
                                    <label for="namaInput">Nama Lengkap</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="fakultas" id="fakultasSelect" aria-label="Floating label select example" required>
                                        <option selected>Pilih Nama Fakultas</option>
                                        <option value="FIK">Fakultas Ilmu Komputer</option>
                                        <option value="FEB">Fakultas Ekonomi Bisnis</option>
                                        <option value="FIB">Fakultas Ilmu Budaya</option>
                                        <option value="FKes">Fakultas Kesehatan</option>
                                        <option value="FT">Fakultas Teknik</option>
                                    </select>
                                    <label for="fakultasSelect">Nama Fakultas</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="jenis_aspirasi" id="jenisAspirasiSelect" aria-label="Floating label select example" required>
                                        <option selected>Pilih Kategori Jenis Aspirasi</option>
                                        <option value="Akademik">Akademik (Wisuda, KTM, dll)</option>
                                        <option value="Beasiswa">Beasiswa (KIP-K, Djarum, dll)</option>
                                        <option value="Fasilitas">Fasilitas (Sarana dan Prasarana, Ruang kelas, Perpustakaan, Aula, Tempat Parkiran, dll)</option>
                                        <option value="Pelayanan">Pelayanan (Pelayanan Birokrasi, Pelayanan Cafetaria & Foodcourt, dll)</option>
                                        <option value="Finansial">Finansial (Surat Dispensasi, dll)</option>
                                        <option value="MBKM">Merdeka Belajar, Kampus Merdeka (MBKM)</option>
                                        <option value="Poliklinik">Poliklinik (Pelayanan, Obat, dll)</option>
                                        <option value="USC">Udinus Sport Center (USC)</option>
                                        <option value="UKM">UKM</option>
                                    </select>
                                    <label for="jenisAspirasiSelect">Jenis Aspirasi</label>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-primary" value="Kirim Aspirasi">
                                </div>
                            </div>
                            <div class="container">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="aspirasi_usc" placeholder="Tuliskan Aspirasi USC..." id="aspirasiUscTextarea" style="height: 100px" required></textarea>
                                    <label for="aspirasiUscTextarea">Aspirasi USC</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="aspirasi_umum" placeholder="Tuliskan Aspirasi Umum..." id="aspirasiUmumTextarea" style="height: 100px" required></textarea>
                                    <label for="aspirasiUmumTextarea">Aspirasi Umum</label>
                                </div>
                                <div class="mb-3">
                                    <label for="gambarKerusakanUsc" class="form-label">Gambar Kerusakan USC</label>
                                    <input class="form-control" name="gambar_kerusakan_usc" type="file" id="gambarKerusakanUsc" accept="image/png, image/jpeg">
                                </div>
                                <div class="mb-3">
                                    <label for="gambarKerusakanUmum" class="form-label">Gambar Kerusakan Umum</label>
                                    <input class="form-control" name="gambar_kerusakan_umum" type="file" id="gambarKerusakanUmum" accept="image/png, image/jpeg">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->

<!-- info section -->
<section class="info_section long_section">
    <!-- ... Bagian setelahnya tetap sama ... -->
</section>
<!-- end info_section -->
@endsection

@section ('footer')
@include('User.Particles.footer')
@endsection