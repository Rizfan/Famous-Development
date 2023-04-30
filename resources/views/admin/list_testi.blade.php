@extends('layouts.main')

@section('title','Manage Testimoni')

@section('content')


<section id="list_kontak">
	
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
				<h2><b>Manage Testimoni</b></h2>
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
				<h2><i class="far fa-smile"></i> Data Testimoni</h2>
			</div>
			<div class="card-body table-responsive">
				<table id="tablet" class="table table-striped table-bordered" cellpadding="10" cellspacing="10"  width="100%">
					
					<thead style="background-color: #04d0d9; color: #fff">
						<tr>
							<th>No</th>
							<th>Nama Klien</th>
							<th>Foto Klien</th>
							<th>Pekerjaan/Jabatan Klien</th>
							<th>Testimoni</th>
							<th colspan="2">Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=0; ?>
						@foreach($testi as $data)
						<?php $no++; ?>
						<tr>
							<td>{{ $no }}</td>
							<td>{{ $data->nama_testi }}</td>
							<td><img src="{{ url('/file_testi/'.$data->foto_testi) }}" width="150px"></td>
							<td>{{ $data->pekerjaan_testi }}</td>
							<td>{!! $data->isi_testi !!}</td>
							<td>
								<button class="btn btn-success"><a class="text-light" href="/admin/list_testi/edit_testi/{{ $data->id_testi }}"> Edit <i class="fas fa-edit"></i></a></button>
								<button class="btn btn-danger"><a class="text-light" onclick="return confirm('Apakah Anda Yakin?')" href="/admin/list_testi/hapus_testi/{{ $data->id_testi }}"> Hapus <i class="fas fa-trash"></i></a></button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="container card-footer">
				<a href="/admin/tambah_testi" class="btn btn-primary btn-block">Tambah Testimoni</a>
			</div>
		</div>

	</center>


</section>

@endsection