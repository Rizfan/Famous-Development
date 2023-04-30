@extends('layouts.main')

@section('title','Berita')

@section('content')


<!-- Header -->
<section id="header">

	<div class="bg-img1 animated fadeIn">

		<div class="dark">

			<center>

				<div class="center">
					<!-- <h1></h1> -->

					<!-- <h1 class="animated bounceInDown" style="color: white; font-size: 500%;">FAMOUS Development</h1> -->
					<h1 class="animated bounceInDown" style="color: white; font-size: 400%;">BERITA</h1>
					<!-- <img class="aw" src="{{'/img/famous_development2.png'}}" style="width: 50%"> -->
					<!-- <h5 class="animated bounceInUp" style="color: white;">Proudly Present for You</h5> -->

                    <!-- <div class="container text-center">
                    	<a href="#tentang_kami" class="btn btn-primary" style="border-radius: 100px; width: 150px;">Get Started</a>
                    </div> -->
                    <!-- <div style="top: 50vh; position: absolute;" class="container text-center">

                        <a style="color: white;" class="page-scroll" href="#pelanggan"><i class="fa-2x fas faa-bounce animated fa-chevron-down"></i></a>

                    </div> -->

                </div>

            </center>

        </div>

    </div>
</section>


<section id="berita">
	<div class="container">
		
		@foreach($berita as $data)
		<div class="spacer2"></div>
		<div class="card animated bounceInUp" style="padding: 20px;">
			<div class="row">
				<div class="col col-md-3">
					<img src="{{ url('/file_berita/'.$data->cover_berita) }}" style="width: 100%; ">
				</div>
				<div class="col col-md-9">
					<a href="/berita/{{$data->id_berita}}"><h4>{{$data->judul_berita}}</h4></a>
					<small>Posted : {{$data->tanggal_berita}}</small><br><br>

					{!!$data->ringkasan_berita!!}<br><br>
					<!-- <p>{{$data->ringkasan_berita}}</p><br><br> -->

					<a href="/berita/{{$data->id_berita}}" class="btn btn-primary" style="border-radius: 100px;">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
		@endforeach

	</div>
</section>

@endsection