@extends('layouts.main')

@section('title','Manage Kontak')

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
				<h2><b>Manage Kontak</b></h2>
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
				<h2><i class="fas fa-photo"></i> Data Kontak</h2>
			</div>
			<div class="card-body table-responsive">
				<table id="tablet" class="table table-striped table-bordered" cellpadding="10" cellspacing="10"  width="100%">
					
					<thead style="background-color: #04d0d9; color: #fff">
						<tr>
							<th>No</th>
							<!-- <th>Nama</th> -->
							<th>No. Telepon</th>
							<th>No. WhatsApp</th>
							<th>Email</th>
							<th>Alamat</th>
							<!-- <th>Ifra</th> -->
							<th colspan="2">Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=0; ?>
						@foreach($kontak as $data)
						<?php $no++; ?>
						<tr>
							<td>{{ $no }}</td>
							<td>{{ $data->tel_kon }}</td>
							<td>{{ $data->wa_kon }}</td>
							<td>{{ $data->email_kon }}</td>
							<td>{!! $data->alamat_kon !!}</td>
							<!-- <td style="width: 150px;"><iframe src="{{$data->iframe_kon}}"></iframe></td> -->
							<td>
								<button class="btn btn-success"><a class="text-light" href="/admin/list_kontak/edit_kontak/{{ $data->id_kon }}"> Edit <i class="fas fa-edit"></i></a></button><!-- 
								<button class="btn btn-danger"><a class="text-light" href="/admin/list_kontak/hapus_kontak/{{ $data->id_kon }}"> Hapus <i class="fas fa-trash"></i></a></button> -->
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				</div><!-- 
		<div class="container card-footer">
			<a href="/admin/tambah_foto" class="btn btn-primary btn-block">Tambah Foto</a>
		</div> -->
	</div>

</center>


</section>

@endsection