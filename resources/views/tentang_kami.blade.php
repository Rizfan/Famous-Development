@extends('layouts.main')

@section('title','Tentang Kami')

@section('content')

<!-- Header -->
<section id="header">

	<div class="bg-img2 animated fadeIn">

		<div class="dark">

			<center>

				<div class="center">
					<!-- <h1></h1> -->

					<!-- <h1 class="animated bounceInDown" style="color: white; font-size: 500%;">FAMOUS Development</h1> -->
					<h1 class="animated bounceInDown" style="color: white; font-size: 400%;">TENTANG KAMI</h1>
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
<section id="tentang_kami">
	
	<div class="container animated bounceInUp">
		<div class="c-content-title-1">
			<center>
				<br><br><br><h1>Famous Development</h1>
				<hr width="50" style="border:2px solid black">
			</center>
		</div>
		@foreach($kami as $data)

		<p style="font-size: 120%;">{!!$data->tentang_kami!!}</p>

		<div class="spacer"></div>
		<div class="row">
			<div class="col-lg-6 text-center text-light" style="background-color: #043353">
				<div class="spacer2"></div>
				<h5 style="font-size: 180%;">Visi Kami</h5>
				<hr width="50"  style="border:2px solid white">
				<p style="font-size: 120%;">{!!$data->visi_kami!!}</p>
				<div class="spacer2"></div>
			</div>
			<div class="col-lg-6 text-center text-light" style="background-color: #18a4e0">
				<div class="spacer2"></div>
				<h5 style="font-size: 180%;">Misi Kami</h5>
				<hr width="50"  style="border:2px solid white">
				<p style="font-size: 120%;">{!!$data->misi_kami!!}</p>
				<div class="spacer2"></div>
			</div>


			<!-- <p>{{$data->misi_kami}}</p> -->
		</div>
		@endforeach
	</div>
</section>


@endsection