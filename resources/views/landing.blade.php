<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <!-- navbar -->
    <nav>
        <div class="nav-header">
            <div class="nav-logo">
                <a href="">CermatFin</a>
            </div>
            <div class="nav-menu-btn" id="nav-btn-menu">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                    </svg>  
                </span>
            </div>
        </div>
        <ul class="nav-links" id="nav_links">
            <li><a href="">home</a></li>
            <li><a href="">features</a></li>
            <li><a href="">sign-up</a></li>
            <li><a href="">testimony</a></li>
        </ul>
    </nav>
    <!-- konten -->
    <div class="konten-wrapper">
        <div class="konten-header">
            <h1 class="judul-teks">Kelola Keuangan Pribadi dengan Mudah, <span>Cerdas</span>, dan Aman</h1>
            <p class="subjudul-teks">Sistem manajemen keuangan pribadi yang membantumu merencanakan <span>anggaran</span>, mencatat <span>pengeluaran</span>, memantau <span>pemasukan</span>, dan mencapai tujuan <span>finansial</span> secara terorganisir.</p>
            <div class="container">
                <div>
                    <a href="" class="kartu-tombol">mulai</a>
                </div>
            </div>
        </div>
        <div class="foto-hiasan">
            <img src="{{ asset('image/lukisbiru.jpg') }}" alt="">
        </div>
    </div>
    

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>