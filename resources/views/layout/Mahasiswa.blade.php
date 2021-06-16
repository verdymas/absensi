<!DOCTYPE HTML>
<html>

<head>
    <title>SI Absensi Mahasiswa</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="/dua//images/logo.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/dua/assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="/dua/assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload landing">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <h1>SI ABSENSI ABSENSI MAHASISWA</a></h1>
            <nav id="nav">
                <ul>
                    <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">HOME</a></li>
                    <li class="{{ request()->routeIs('dosen2') ? 'active' : '' }}"><a href="/dosen2">DOSEN</a></li>
                    <li class="{{ request()->routeIs('jadwal2') ? 'active' : '' }}"><a href="/jadwal2">JADWAL</a></li>
                    <li class="{{ request()->routeIs('matkul2') ? 'active' : '' }}"><a href="/matkul2">MATKUL</a></li>
                    <li class="{{ request()->routeIs('pengumuman2') ? 'active' : '' }}"><a href="/pengumuman2">PENGUMUMAN</a></li>
                    <li class="{{ request()->routeIs('absensi') ? 'active' : '' }}"><a href="/absensi">ABSEN</a></li>
                    <li class="{{ request()->routeIs('prof_mhs') ? 'active' : '' }}"><a href="/profil_mahasiswa/{profil:id}">PROFIL</a></li>
                    <li><a href="/logout" class="button primary">LOGOUT</a></li>
                </ul>
            </nav>
        </header>

        <div class="wrapper row4">
            <div id="container" class="clear">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>


        <!-- Footer -->
        <footer id="footer">
            <ul class="icons">
                <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                <li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; 2021 - All rights reserved - Manajemen Informatika</li>
                <li>Template by : <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="/dua/assets/js/jquery.min.js"></script>
    <script src="/dua/assets/js/jquery.scrolly.min.js"></script>
    <script src="/dua/assets/js/jquery.dropotron.min.js"></script>
    <script src="/dua/assets/js/jquery.scrollex.min.js"></script>
    <script src="/dua/assets/js/browser.min.js"></script>
    <script src="/dua/assets/js/breakpoints.min.js"></script>
    <script src="/dua/assets/js/util.js"></script>
    <script src="/dua/assets/js/main.js"></script>

</body>

</html>
