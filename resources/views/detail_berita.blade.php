@extends('layouts.main')

@section('title','Berita')

@section('content')

<section id="detail_berita">
	<div class="container"><!-- 
		<div class="c-content-title-1">
			<center>
				<div class="spacer"></div>
				<h1>Berita</h1>
				<hr width="50" style="border:2px solid black">
			</center>
		</div> -->
		<div class="spacer2"></div>
		@foreach($berita as $data)
		<div class="card" style="width: 100%;">

			<div class="card-header">
				<center>
					<h3>{{$data->judul_berita}}</h3>
				</center>
			</div>

			<div class="card-body">
				<small>Posted : {{$data->tanggal_berita}}</small>
				<center>
					<img src="{{ url('/file_berita/'.$data->cover_berita) }}"  style="width: 60%;">
				</center>
				<div class="spacer2"></div>
				<p>{!!$data->isi_berita!!}</p>
			</div>

			<a href="/berita" class="btn btn-danger">Kembali</a>
		</div>
		@endforeach
	</div>
</section>



@endsection