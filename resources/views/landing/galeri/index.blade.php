@extends('landing.index')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_2.jpg')}}');">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters slider-text align-items-center justify-content-center">
		<div class="col-md-9 ftco-animate text-center">
		  <h1 class="mb-2 bread">Galeri</h1>
		  <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Galeri <i class="ion-ios-arrow-forward"></i></span></p>
		</div>
	  </div>
	</div>
  </section>

    <section class="ftco-gallery mt-5 mb-5">
        @if (count($galeri) > 0)
            
            <div class="container-wrap">
                <div class="row no-gutters">
                    <?php 
                    $countGaleri = count($galeri);
                    ?>
                    @foreach ($galeri as $item)
                        <div class="ftco-animate col-md-3">
                            <a href="{{asset('storage/galeri/' . $item->foto)}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('storage/galeri/' . $item->foto)}});">
                                <div class=" mb-4 d-flex align-items-center justify-content-center">
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
        <h5 class="p-5">Data Kosong</h5>
        @endif
    </section>
    <div class="mt-3 p-5 text-end" style="display: flex; justify-content: flex-end;">
        @if ($galeri->previousPageUrl())
            <a href="{{ $galeri->previousPageUrl() }}" class="btn btn-secondary">Sebelumnya</a>
        @endif
    
        @if ($galeri->nextPageUrl())
            <a href="{{ $galeri->nextPageUrl() }}" class="btn btn-primary">Selanjutnya</a>
        @endif
    </div>
    {{-- <div class="mt-3 p-5 text-end">
        {{$galeri->links()}}
    </div> --}}
@endsection