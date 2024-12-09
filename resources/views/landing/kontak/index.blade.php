@extends('landing.index')

@section('content')
<section class="hero-wrap hero-wrap-2 " style="background-image: url('{{asset('assets/images/bg_2.jpg')}}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Contact Us</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a>
            </span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Alamat</h3>
              <p>	Jl. Kusuma Bangsa Desa Tanggumong, Kec. Sampang, Kab. Sampang</p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Telphone</h3>
              <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Email Address</h3>
              <p><a href="mailto:maalmahmudiyah@yahoo.co.id">	maalmahmudiyah@yahoo.co.id
              </a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Website</h3>
              <p><a href="#">www.maalmahmudiyah.com</a></p>
            </div>
        </div>
      </div>
    </div>
  </section>
      
@endsection