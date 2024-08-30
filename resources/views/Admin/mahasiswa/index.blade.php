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
            <li>
                <a href="{{ route('adminDashboard') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="active">
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
                    <h1>Mahasiswa</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevron-right'></i>
                        </li>
                        <li>
                            <a href="#">Mahasiswa</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Data Mahasiswa</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIM</th>
                                <th>Fakultas</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>+
                            @if($mahasiswa->count() > 0)
                            @foreach($mahasiswa as $mhs)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mhs->nim }}</td>
                                <td>{{ $mhs->fakultas }}</td>
                                <td>{{ $mhs->nama }}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td class="colspan-4">Mahasiswa not found</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!-- MAIN END -->
    </section>
    <!-- CONTENT END -->



    <script src="{{ asset('admin_assets/js/script.js') }}"></script>
</body>

</html>