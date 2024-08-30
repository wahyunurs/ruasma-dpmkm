<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- My CSS -->
  <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">
  <title>Admin-Ruasma</title>
</head>

<body>
  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="#" class="brand">
      <i class='bx bxs-megaphone'></i>
      <span class="text">Admin-Ruasma</span>
    </a>
    <ul class="side-menu top">
      <li class="active">
        <a href="{{ route('adminDashboard') }}">
          <i class='bx bxs-dashboard'></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{ route('adminMahasiswa') }}">
          <i class='bx bxs-group'></i>
          <span class="text">Mahasiswa</span>
        </a>
      </li>
      <li>
        <a href="{{ route('adminAspirasi') }}">
          <i class='bx bxs-message-error'></i>
          <span class="text">Aspirasi</span>
        </a>
      </li>
    </ul>
    <ul class="side-menu">
      <li>
        <a href="{{ route('logout') }}" class="logout">
          <i class='bx bx-log-out-circle'></i>
          <span class="text">Logout</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- SIDEBAR END -->


  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <i class='bx bx-menu'></i>
      <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Search...">
          <button type="submit" class="search-btn"><i class='bx bx-search-alt-2'></i></button>
        </div>
      </form>
      <input type="checkbox" id="switch-mode" hidden>
      <label for="switch-mode" class="switch-mode"></label>
      <a href="#" class="notification">
        <i class='bx bxs-bell'></i>
        <span class="num">1</span>
      </a>
      <a href="#" class="nav-link">{{ auth()->user()->username }}</a>
      <a href="#" class="profile">
        <img src="{{ asset('admin_assets/img/admin-profile.jpeg') }}">
      </a>
    </nav>
    <!-- NAVBAR END -->

    <!-- MAIN -->
    <main>
      <div class="head-title">
        <div class="left">
          <h1>Dashboard</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#">Dashboard</a>
            </li>
            <li>
              <i class='bx bxs-chevron-right'></i>
            </li>
            <li>
              <a href="#">Home</a>
            </li>
          </ul>
        </div>
      </div>

      <ul class="box-info">
        <li>
          <i class='bx bxs-group'></i>
          <span class="text">
            <h3>1020</h3>
            <p>Mahasiswa</p>
          </span>
        </li>
        <li>
          <i class='bx bxs-message-error'></i>
          <span class="text">
            <h3>2834</h3>
            <p>Aspirasi</p>
          </span>
        </li>
    </main>
    <!-- MAIN END -->
  </section>
  <!-- CONTENT END -->



  <script src="{{ asset('admin_assets/js/script.js') }}"></script>
</body>

</html>