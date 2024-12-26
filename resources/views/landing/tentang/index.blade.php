@extends('landing.index')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_1.png')}}');">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row no-gutters slider-text align-items-center justify-content-center">
		<div class="col-md-9 ftco-animate text-center">
		  <h1 class="mb-2 bread">Tentang Kami</h1>
		  <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Tentang Kami <i class="ion-ios-arrow-forward"></i></span></p>
		</div>
	  </div>
	</div>
  </section>
	  
	  <section class="ftco-section ftco-no-pt ftc-no-pb">
		  <div class="container">
			  <div class="row">
				  <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
						<h2 class="mb-4">Visi</h2>
						<p>mewujudkan insan yang religius, berkualitas dalam IPTEK dan Humanis.</p>
				  </div>
			  </div>
			  <div class="row">
				<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
					  <h2 class="mb-4">Misi</h2>
					  <ol>
						<li>⁠menumbuhkan semangat belajar untuk pengmebangan IPTEK dan IMTAQ </li>
						<li>⁠Mewujudkan kegiatan pembelajaran yang menyenangkan, kreatifdan religius</li>
						<li>Menumbuhkan semangat pengamalan ajaran islam dalam perilaku sehari-hari</li>
						<li>Menjadikan semua warga sekolah yang memiliki kepeduliaan terhadap diri, lingkungandan beretika</li>
					  </ol>
				</div>
			</div>
		  </div>
	  </section>
@endsection