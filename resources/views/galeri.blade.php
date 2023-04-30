@extends('layouts.main')

@section('title','Galeri')

@section('content')


<!-- Header -->
<section id="header">

	<div class="bg-img4 animated fadeIn">

		<!-- <div class="dark"> -->

			<center>

				<div class="center">
					<!-- <h1></h1> -->

					<!-- <h1 class="animated bounceInDown" style="color: white; font-size: 500%;">FAMOUS Development</h1> -->
					<h1 class="animated bounceInDown" style="color: white; font-size: 400%;">GALERI</h1>
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

            <!-- </div> -->

        </div>
    </section>

    <section id="galeri">
    	<div class="container">
<!-- 		<div class="c-content-title-1">
			<center>
				<br><br><br><h1>Galeri</h1>
				<hr width="50" style="border:2px solid black">
			</center>
		</div>
	-->

	<div class="spacer2"></div>

	<div class="container">
		<div class="row justify-content-center animated bounceInUp">
			@foreach($galeri as $data)


			<div class="col-lg-4 mb-5">
				<a href="{{ url('/file_galeri/'.$data->file_foto) }}" data-lightbox="Laptop1" data-title="{{ $data->nama_foto}}">
					<div class="card">
						<img src="{{ url('/file_galeri/'.$data->file_foto) }}"  style="width: 100%">
						<div class="card-body"><center>
							<h5 class="card-title">{{$data->nama_foto}}</h5></center>
						</div>
					</div>
				</a>
			</div>


			@endforeach
		</div>
	</div>

</div>
</section>


@endsection