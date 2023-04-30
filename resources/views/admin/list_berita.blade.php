@extends('layouts.main')

@section('title','Manage Berita')

@section('content')
<section id="list_berita">
	
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
				<h2><b>Manage Berita</b></h2>
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
				<h2><i class="fas fa-newspaper"></i> Data Berita</h2>
			</div>
			<div class="card-body table-responsive">
				<table id="tablet" class="table table-striped table-bordered" cellpadding="10" cellspacing="10"  width="100%">
					
					<thead style="background-color: #04d0d9; color: #fff">
						<tr>
							<th>No</th>
							<th>Cover Berita</th>
							<th>Judul Berita</th>
							<th>Tanggal Upload</th>
							<th colspan="2">Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=0; ?>
						@foreach($berita as $data)
						<?php $no++; ?>
						<tr>
							<td>{{ $no }}</td>
							<td><img src="{{ url('/file_berita/'.$data->cover_berita) }}" width="150px"></td>
							
							<td>{{ $data->judul_berita }}</td>
							<td>{{ $data->tanggal_berita }}</td>
							<td>
								<button class="btn btn-success"><a class="text-light" href="/admin/edit_berita/{{ $data->id_berita }}"> Edit <i class="fas fa-edit"></i></a></button>
								<button class="btn btn-danger"><a class="text-light" onclick="return confirm('Apakah Anda Yakin?')" href="/admin/hapus_berita/{{ $data->id_berita }}"> Hapus <i class="fas fa-trash"></i></a></button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="container card-footer">
				<a href="/admin/tambah_berita" class="btn btn-primary btn-block">Tambah Berita</a>
			</div>
		</div>

	</center>


</section>

@endsection