@extends('layouts.main')

@section('title','Manage Sosmed')

@section('content')

<section id="list_sosmed">
	
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
				<h2><b>Manage Sosmed</b></h2>
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
				<h2><i class="fas fa-photo"></i> Data sosmed</h2>
			</div>
			<div class="card-body table-responsive">
				<table id="tablet" class="table table-striped table-bordered" cellpadding="10" cellspacing="10"  width="100%">
					
					<thead style="background-color: #04d0d9; color: #fff">
						<tr>
							<th>No</th>
							<th>Instagram</th>
							<th>Facebook</th>
							<th>Twitter</th>
							<th colspan="2">Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=0; ?>
						@foreach($sosmed as $data)
						<?php $no++; ?>
						<tr>
							<td>{{ $no }}</td>
							<td>{{ $data->instagram_sosmed }}</td>
							<td>{{ $data->fb_sosmed }}</td>
							<td>{{ $data->twit_sosmed }}</td>
							<td>
								<button class="btn btn-success"><a class="text-light" href="/admin/list_sosmed/edit_sosmed/{{ $data->id_sosmed }}"> Edit <i class="fas fa-edit"></i></a></button>
								<!-- <button class="btn btn-danger"><a class="text-light" href="/admin/list_sosmed/hapus_sosmed/{{ $data->id_sosmed }}"> Hapus <i class="fas fa-trash"></i></a></button> -->
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

	</center>


</section>

@endsection