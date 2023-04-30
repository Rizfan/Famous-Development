
@extends('layouts/main')

@section('title','Manage Vidio')

@section('css')
<style type="text/css">
.vid{
	width: 200px;
	height: auto;
}
</style>
@endsection

@section('content')

<section id="list_vidio" >
	<br>	
	<center>

		
		@if (session('alert'))
		<script>		
			alert("{{ session('alert') }}")
		</script>
		@endif


		
		<header>
			<div style="margin-bottom: -8px;"></div>
			<div class=" container card card-header " style="background-color: #04d0d9; color: #fff">
				<h2><b>Manage Vidio</b></h2>
			</div>
			<div style="margin-bottom: -8px;"></div>
			<!-- <hr> -->
			<!-- <p>
				<a href="/crud">Beranda</a>|
				<a href="/tambah_siswa">Tambah Data Siswa</a>|
				<a href="#">List Guru</a>|
				<a href="#">Tambah Data Guru</a>
			</p> -->
		</header>
		<br>

		<div class="container text-center card card-body " >
			<div class="head2 card card-header alert-primary " >
				<h2><i class="fas fa-video"></i> Data Vidio</h2>
			</div>
			<div class="card-body table-responsive">
				<table id="tablet" class="table table-striped table-bordered" cellpadding="10" cellspacing="10"  width="100%">
					
					<thead style="background-color: #04d0d9; color: #fff">
						<tr>
							<th>No</th>
							<th>vidio</th>
							<th colspan="2">Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=0; ?>
						@foreach($vidio as $data)
						<?php $no++; ?>
						<tr>
							<td>{{ $no }}</td>
							<td>
								<div class="text-center">
									{!!$data->link_vid!!}
								</div>
								<!-- <iframe width="200px" src="https://youtube.com/embed/{{$data->link_vid}}"></iframe> -->
								<!-- <embed width="200px" src="{{$data->link_vid}}"> -->
								</td>
								<td>
									<button class="btn btn-success"><a class="text-light" href="/admin/list_vidio/edit_vidio/{{ $data->id_vid }}"> Edit <i class="fas fa-edit"></i></a></button>
									<button class="btn btn-danger"><a class="text-light" onclick="return confirm('Apakah Anda Yakin?')" href="/admin/list_vidio/hapus_vidio/{{ $data->id_vid }}"> Hapus <i class="fas fa-trash"></i></a></button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="container card-footer">
					<a href="/admin/tambah_vidio" class="btn btn-primary btn-block">Tambah Vidio</a>
				</div>
			</div>

		</center>


	</section>

	@endsection