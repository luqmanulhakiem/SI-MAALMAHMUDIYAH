@extends('landing.index')

@section('content')
    
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url({{asset('assets/images/bg_1.jpg')}});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 text-center ftco-animate">
          <h1 class="mb-4">Selamat Datang <span>Di MA AL MAHMUDIYAH</span></h1>
        </div>
      </div>
      </div>
    </div>

    <div class="slider-item" style="background-image:url({{asset('assets/images/bg_2.jpg')}});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 text-center ftco-animate">
          <h1 class="mb-4">Lorem Ipsum<span> dolor sit amet lorem</span></h1>
        </div>
      </div>
      </div>
    </div>
  </section>

  {{-- <section class="ftco-section testimony-section bg-light" id="tentangkami">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4"><span>Tentang Kami</span></h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A quidem fugit expedita eligendi facere sapiente culpa minima optio reiciendis ullam.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto, repudiandae?
          </p>
        </div>
      </div>
     
    </div>
  </section> --}}

  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
	  <div class="container">
		  <div class="row justify-content-center mb-5 pb-2">
		<div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
		  {{-- <h2 class="mb-4"><span>Statistik Total</h2> --}}
      {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, laboriosam.</p> --}}
		</div>
	  </div>	
		  <div class="row d-md-flex align-items-center justify-content-center">
			  <div class="col-lg-10">
				  <div class="row d-md-flex align-items-center">
				<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				  <div class="block-18">
					  <div class="icon"><span class="flaticon-doctor"></span></div>
					<div class="text">
					  <strong class="number" data-number="{{$countSertifikasiGuru}}">0</strong>
					  <span>Sertifikasi Guru</span>
					</div>
				  </div>
				</div>
				<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				  <div class="block-18">
					  <div class="icon"><span class="flaticon-doctor"></span></div>
					<div class="text">
					  <strong class="number" data-number="{{$countSiswa}}">0</strong>
					  <span>Siswa Aktif</span>
					</div>
				  </div>
				</div>
				<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				  <div class="block-18">
					  <div class="icon"><span class="flaticon-doctor"></span></div>
					<div class="text">
					  <strong class="number" data-number="{{$countGuru}}">0</strong>
					  <span>Guru Aktif</span>
					</div>
				  </div>
				</div>
			</div>
		</div>
	  </div>
	  </div>
  </section>


    <section class="ftco-section bg-light">
        <div class="container">
              <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                  <h2 class="mb-4"><span>Ekstrakurikuler</span></h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, nulla!</p>
                </div>
              </div>
              @if (count($ekstrakurikuler) > 0)
              <div class="row">
                  @foreach ($ekstrakurikuler as $item)
                  <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                      <a href="#" class="block-20 d-flex align-items-end" style="background-image: url({{asset('storage/ekstrakurikuler/' . $item->foto)}});">
                      </a>
                      <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#">{{$item->nama}}</a></h3>
                        {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              @else
                <div class="row justify-content-center">
                  <h2 class="mb-4 text-center" ><span>Belum memiliki Ekstrakurikuler</span></h2>
                </div>
              @endif
        </div>
    </section>

    @if (count($galeri) > 0)
      <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
              <?php 
                $countGaleri = count($galeri);
                ?>
              @foreach ($galeri as $item)
                <div class="ftco-animate
                  @switch($countGaleri)
                      @case(1)
                          col-md-12
                          @break
                      @case(2)
                          col-md-6
                          @break
                      @case(3)
                          col-md-4
                          @break
                      @default
                          col-md-3
                  @endswitch
                ">
                    <a href="{{asset('storage/galeri/' . $item->foto)}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('storage/galeri/' . $item->foto)}});">
                        <div class=" mb-4 d-flex align-items-center justify-content-center">
                        </div>
                    </a>
                </div>
              @endforeach
            </div>
        </div>
      </section>
    @else
    @endif
  </section>
@endsection