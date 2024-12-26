@extends('landing.index')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_1.png')}}');">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters slider-text align-items-center justify-content-center">
		<div class="col-md-9 ftco-animate text-center">
		  <h1 class="mb-2 bread">Sertifikasi Guru</h1>
		  <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Sertifikasi Guru <i class="ion-ios-arrow-forward"></i></span></p>
		</div>
	  </div>
	</div>
  </section>

  <section class="ftco-gallery mt-5 mb-5">
        @if (count($data) > 0)
        <div class="container-wrap">
            <div class="row no-gutters">
                <?php 
                $countGaleri = count($data);
                ?>
                @foreach ($data as $item)
                    <div class="ftco-animate col-md-3">
                        <a href="{{asset('storage/sertifikat/guru/' . $item->foto)}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('storage/sertifikat/guru/' . $item->foto)}});">
                            <div class=" mb-4 d-flex align-items-center justify-content-center">

                            </div>
                        </a>
                        <h5 class="text-center">{{$item->nama}}</h5>
                        <p class="text-center">{{$item->deskripsi}}</p>
                    </div>
                @endforeach
                    
            </div>
        </div>
        @else
            <h5 class="p-5">Data Kosong</h5>
        @endif
    </section>
    <div class="mt-3 p-5 text-end" style="display: flex; justify-content: flex-end;">
        @if ($data->previousPageUrl())
            <a href="{{ $data->previousPageUrl() }}" class="btn btn-secondary">Sebelumnya</a>
        @endif
    
        @if ($data->nextPageUrl())
            <a href="{{ $data->nextPageUrl() }}" class="btn btn-primary">Selanjutnya</a>
        @endif
    </div>
@endsection