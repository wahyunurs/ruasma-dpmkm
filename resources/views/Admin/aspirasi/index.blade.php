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
            <li>
                <a href="{{ route('adminMahasiswa') }}">
                    <i class='bx bxs-group'></i>
                    <span class="text">Mahasiswa</span>
                </a>
            </li>
            <li class="active">
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
                    <h1>Aspirasi</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevron-right'></i>
                        </li>
                        <li>
                            <a href="#">Aspirasi</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Data Aspirasi</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <th>#</th>
                            <th>Jenis Aspirasi</th>
                            <th>Aspirasi USC</th>
                            <th>Aspirasi Umum</th>
                            <th>Gambar Kerusakan USC</th>
                            <th>Gambar Kerusakan Umum</th>
                        </thead>
                        <tbody>+
                            @if($aspirasi->count() > 0)
                            @foreach($aspirasi as $asp)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $asp->jenis_aspirasi }}</td>
                                <td>{{ $asp->aspirasi_usc }}</td>
                                <td>{{ $asp->aspirasi_umum }}</td>
                                <td>
                                    @if($asp->gambar_kerusakan_usc)
                                    <img src="{{ asset('gambar_kerusakan_usc/' . $asp->gambar_kerusakan_usc) }}" alt="Gambar Kerusakan USC" width="100">
                                    @else
                                    N/A
                                    @endif
                                </td>
                                <td>
                                    @if($asp->gambar_kerusakan_umum)
                                    <img src="{{ asset('gambar_kerusakan_umum/' . $asp->gambar_kerusakan_umum) }}" alt="Gambar Kerusakan Umum" width="100">
                                    @else
                                    N/A
                                    @endif
                                </td>
                                @endforeach
                                @else
                            <tr>
                                <td class="colspan-6" colspan="6">Aspirasi not found</td>
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