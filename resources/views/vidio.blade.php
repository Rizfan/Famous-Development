@extends('layouts.main')

@section('title','Vidio')

@section('css')
<style type="text/css">
.vid{
	width: 400px;
	min-height: 250px;
	height: auto;
}

@media screen and (max-width: 768px){
	.vid{
		width: 350px;
		height: 200px;
	}
}
</style>
@endsection

@section('content')

<!-- Header -->
<section id="header">

	<div class="bg-img5 animated fadeIn">

		<div class="dark">

			<center>

				<div class="center">
					<!-- <h1></h1> -->

					<!-- <h1 class="animated bounceInDown" style="color: white; font-size: 500%;">FAMOUS Development</h1> -->
					<h1 class="animated bounceInDown" style="color: white; font-size: 400%;">VIDIO</h1>
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

<section id="vidio">
	<div class="container animated bounceInUp"><!-- 
		<div class="c-content-title-1">
			<center>
				<br><br><br><h1>Vidio</h1>
				<hr width="50" style="border:2px solid black">
			</center>
		</div>
	-->
	<div class="spacer2"></div>
	<div class="container">
		<div class="row justify-content-center">

			@foreach($vidio as $data)

			<div class="col col-md-5">
				<!-- <div class="card"> -->
					{!!$data->link_vid!!}
					<!-- </div> -->
				</div>

				@endforeach
				

				
			</div>
		</div>

	</div>
</section>


@endsection