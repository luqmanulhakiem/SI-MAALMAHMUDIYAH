@extends('landing.index')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_1.png')}}');">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters slider-text align-items-center justify-content-center">
		<div class="col-md-9 ftco-animate text-center">
		  <h1 class="mb-2 bread">Pengajar</h1>
		  <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Pengajar <i class="ion-ios-arrow-forward"></i></span></p>
		</div>
	  </div>
	</div>
  </section>
	  
	  <section class="ftco-section ftco-no-pb">
		  <div class="container">
			  <div class="row">
				@if (count($guru) > 0)
					@foreach ($guru as $item)
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="staff">
								@if ($item->foto == null)
								<div class="img-wrap d-flex align-items-stretch">
									<div class="img align-self-stretch" style="background-image: url({{asset('assets/images/user.png')}});"></div>
								</div>
							@else
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('storage/guru/' . $item->foto)}});"></div>
							</div>
							@endif
								
								<div class="text pt-3 text-center">
									<h3>{{$item->nama}}</h3>
									<span class="position mb-2">Teacher</span>
									<div class="faded">
									</div>
								</div>
							</div>
						</div>
					@endforeach
				@else
					<h5>Data Kosong</h5>
				@endif
			  </div>

		  </div>
	  </section>
	  <div class="mt-3 p-5 text-end" style="display: flex; justify-content: flex-end;">
        @if ($guru->previousPageUrl())
            <a href="{{ $guru->previousPageUrl() }}" class="btn btn-secondary">Sebelumnya</a>
        @endif
    
        @if ($guru->nextPageUrl())
            <a href="{{ $guru->nextPageUrl() }}" class="btn btn-primary">Selanjutnya</a>
        @endif
    </div>

@endsection