@extends('Landing.Particles.main')

@section('header')

  @include('Landing.Particles.header')

@endsection

@section('content')
  <!-- contact section -->
  <section class="contact_section  long_section">
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
            <form action="{{url('/aspirasi/upload')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="d-flex flex-row">
                <div class="container">
                  <div class="form-floating mb-3">
                    <input type="text" name="nim_mhs" class="form-control" id="floatingInput" placeholder="" required>
                    <label for="floatingInput">Nomor Induk Mahasiswa</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" name="nama_mhs" class="form-control" id="floatingInput" placeholder="" required>
                    <label for="floatingInput">Nama Lengkap</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" name="fakultas_mhs" class="form-control" id="floatingInput" placeholder="" required>
                    <label for="floatingInput">Nama Fakultas</label>
                  </div>
                  <div class="form-floating mb-3">
                    <select class="form-select" name="jenis_aspirasi" id="floatingSelect" aria-label="Floating label select example" required>
                      <option selected>Pilih Kategori Jenis Aspirasi</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">Jenis Aspirasi</label>
                  </div>
                  <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Kirim Aspirasi">
                  </div>
                </div>
                <div class="container">
                  <div class="form-floating mb-3">
                    <textarea class="form-control" name="umum_aspirasi" placeholder="Tuliskan Aspirasi Umum..." id="floatingTextarea2" style="height: 100px" required></textarea>
                    <label for="floatingTextarea2">Aspirasi Umum</label>
                  </div>
                  <div class="form-floating mb-3">
                    <textarea class="form-control" name="usc_aspirasi" placeholder="Tuliskan Aspirasi Umum..." id="floatingTextarea2" style="height: 100px" required></textarea>
                    <label for="floatingTextarea2">Aspirasi USC</label>
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Gambar Kerusakan Umum</label>
                    <input class="form-control" name="umum_gambar" type="file" id="formFile" accept="image/png, image/jpeg">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Gambar USC</label>
                    <input class="form-control" name="usc-gambar" type="file" id="formFile" accept="image/png, image/jpeg">
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

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : +01 123455678990
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : demo@gmail.com
          </span>
        </a>
        <a href="">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Location
          </span>
        </a>
      </div>

      <div class="info_top ">
        <div class="row ">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="info_links">
              <h4>
                QUICK LINKS
              </h4>
              <div class="info_links_menu">
                <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                <a class="" href="about.html"> About</a>
                <a class="" href="furniture.html">Furniture</a>
                <a class="" href="blog.html">Blog</a>
                <a class="" href="contact.html">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
            <div class="info_post">
              <h5>
                INSTAGRAM FEEDS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/f1.png" alt="">
                </div>
                <div class="img-box">
                  <img src="images/f2.png" alt="">
                </div>
                <div class="img-box">
                  <img src="images/f3.png" alt="">
                </div>
                <div class="img-box">
                  <img src="images/f4.png" alt="">
                </div>
                <div class="img-box">
                  <img src="images/f5.png" alt="">
                </div>
                <div class="img-box">
                  <img src="images/f6.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              <h4>
                SIGN UP TO OUR NEWSLETTER
              </h4>
              <form action="">
                <input type="text" placeholder="Enter Your Email" />
                <button type="submit">
                  Subscribe
                </button>
              </form>
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->
@endsection

@section ('footer')

  @include('Landing.Particles.footer')
  
@endsection