@extends('layouts.main')

@section('title','Dashboard')

@section('content')

<section id="dashboard">
	
	<div class="container">

		<div class="alert alert-success animated fadeIn" role="alert " style="margin-top: 25px;">
			Selamat Datang, {{ Auth::user()->name }}!
		</div>
		<div class="row justify-content-center animated zoomInDown">
			<div class="card mb-3" style="min-width: 18rem; color: #78dbf3; background-color: #323846; margin:15px;">
				<div class="card-header">Pelanggan</div>
				<div class="card-body">
					<h5 class="text-center">Jumlah Pelanggan <i class="fas fa-users"></i></h5>
					<h1 class="card-text text-center">
						{{ $pelanggan }}
					</h1>
				</div>
				<div class="card-footer" style="background-color: #fbf9f3; ">
					<p style="color:#c3f7eb "><a href="/admin/list_pelanggan" class="">Lihat Selengkapnya</a></p>
				</div>
			</div>
			<div class="card mb-3" style="min-width: 18rem; background-color: #c3f7eb; color: #323846; margin:15px;">
				<div class="card-header">Berita</div>
				<div class="card-body">
					<h5 class="text-center">Jumlah Berita <i class="fas fa-newspaper"></i></h5>
					<h1 class="card-text text-center">
						{{ $berita }}
					</h1>
				</div>
				<div class="card-footer" style="background-color: #fbf9f3; ">
					<p style="color:#c3f7eb "><a href="/admin/list_berita" class="">Lihat Selengkapnya</a></p>
				</div>
			</div>
			<div class="card text-dark mb-3" style="background-color: #7ad8eb;min-width: 18rem; margin:15px;">
				<div class="card-header">Galeri</div>
				<div class="card-body">
					<h5 class="text-center">Jumlah Foto <i class="fas fa-photo"></i></h5>
					<h1 class="card-text text-center">
						{{ $galeri }}
					</h1>
				</div>
				<div class="card-footer" style="background-color: #fbf9f3; ">
					<p style="color:#c3f7eb "><a href="/admin/list_foto" class="">Lihat Selengkapnya</a></p>
				</div>
			</div>
		</div>

		<div class="row justify-content-center animated zoomInUp">
			<div class="card text-white mb-3" style="background-color: #2fc2df;min-width: 18rem; margin:15px;">
				<div class="card-header">Vidio</div>
				<div class="card-body">
					<h5 class="text-center">Jumlah Vidio <i class="fas fa-video"></i></h5>
					<h1 class="card-text text-center">
						{{ $video }}
					</h1>
				</div>
				<div class="card-footer" style="background-color: #fbf9f3; ">
					<p style="color:#c3f7eb "><a href="/admin/list_vidio" class="">Lihat Selengkapnya</a></p>
				</div>
			</div>
			<div class="card text-white mb-3" style="background-color: #18a4e0;min-width: 18rem; margin:15px;">
				<div class="card-header">Testimonial</div>
				<div class="card-body">
					<h5 class="text-center">Jumlah Testimoni <i class="far fa-smile"></i></h5>
					<h1 class="card-text text-center">
						{{ $testi }}
					</h1>
				</div>
				<div class="card-footer" style="background-color: #fbf9f3; ">
					<p style="color:#c3f7eb "><a href="/admin/list_testi" class="">Lihat Selengkapnya</a></p>
				</div>
			</div>

			<div class="card text-white mb-3" style="background-color: #285bd4;min-width: 18rem; margin:15px;">
				<div class="card-header">Saran & Komentar</div>
				<div class="card-body">
					<h5 class="text-center">Jumlah Saran & Komentar <i class="far fa-comment-dots"></i></h5>
					<h1 class="card-text text-center">
						{{ $sarkom }}
					</h1>
				</div>
				<div class="card-footer" style="background-color: #fbf9f3; ">
					<p style="color:#c3f7eb "><a href="/admin/list_sarkom" class="">Lihat Selengkapnya</a></p>
				</div>
			</div>
			
		</div>
	</div>	

	@if (session('alert'))
	<script>		
		alert("{{ session('alert') }}")
	</script>
	@endif

</section>

@endsection