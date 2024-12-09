<div class="py-2 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md-5 pr-4 d-flex topper align-items-center">
                        <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                        <span class="text">Jl. Kusuma Bangsa Desa Tanggumong, Kec. Sampang, Kab. Sampang</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">maalmahmudiyah@yahoo.co.id</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">+ 1235 2355 98</span>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="#">MA AL MAHMUDIYAH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a href="{{route('home')}}" class="nav-link pl-0">Beranda</a></li>
            <li class="nav-item {{Request::is('tentang') ? 'active' : ''}}"><a href="{{route('tentang')}}" class="nav-link">Tentang</a></li>
            <li class="nav-item {{Request::is('pengajar') ? 'active' : ''}}"><a href="{{route('pengajar')}}" class="nav-link">Pengajar</a></li>
            <li class="nav-item {{Request::is('galeri') ? 'active' : ''}}"><a href="{{route('galeri')}}" class="nav-link">Galeri</a></li>
            <li class="nav-item {{Request::is('sertifikasi-guru') ? 'active' : ''}}"><a href="{{route('sertifikasi.guru')}}" class="nav-link">Sertifikasi</a></li>
            {{-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> --}}
          <li class="nav-item {{Request::is('kontak') ? 'active' : ''}}"><a href="{{route('contact')}}" class="nav-link">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>
