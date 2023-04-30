
@extends('layouts/main')

@section('title','Manage Galeri')

@section('css')



@endsection

@section('content')
<section id="list_foto" >
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
				<h2><b>Manage Galeri</b></h2>
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

		<div class="container text-center card card-body" >
			<div class="head2 card card-header alert-primary " style="width: auto;">
				<h2><i class="fas fa-photo"></i> Data Foto</h2>
			</div>
			<div class="card-body  table-responsive">
				<table id="tablet" class="table table-striped table-bordered" cellpadding="10" cellspacing="10">
					
					<thead style="background-color: #04d0d9; color: #fff">
						<tr>
							<th>No</th>
							<th>Judul Foto</th>
							<th>Foto</th>
							<th colspan="2">Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=0; ?>
						@foreach($foto as $data)
						<?php $no++; ?>
						<tr>
							<td>{{ $no }}</td>
							<td>{{ $data->nama_foto }}</td>
							<td><img width="150px" src="{{ url('/file_galeri/'.$data->file_foto) }}"></td>
							<td>
								<button class="btn btn-success"><a class="text-light" href="/admin/list_foto/edit_foto/{{ $data->id_foto }}"> Edit <i class="fas fa-edit"></i></a></button>
								<button class="btn btn-danger"><a class="text-light" onclick="return confirm('Apakah Anda Yakin?')" href="/admin/list_foto/hapus_foto/{{ $data->id_foto }}"> Hapus <i class="fas fa-trash"></i></a></button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="container card-footer">
				<a href="/admin/tambah_foto" class="btn btn-primary btn-block">Tambah Foto</a>
			</div>
		</div>

	</center>

</section>
@endsection