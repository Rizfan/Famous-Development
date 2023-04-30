
@extends('layouts/main')

@section('title','Data Pelanggan')

@section('content')

<section id="list_pelanggan">
	<br>	
	<center>

		
		<header>
			<div style="margin-bottom: -8px;"></div>
			<div class=" container card card-header " style=" color: #78dbf3; background-color: #323846;">
				<h2><b>Manage Data Pelanggan</b></h2>
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

		<div class="container text-center card card-body ">
			<div class="head2 card card-header alert-primary " >
				<h2><i class="fas fa-users"></i> Data Pelanggan</h2>
			</div>
			<div class="card-body table-responsive">
				<table id="tablet" class="table table-striped table-bordered " cellpadding="10" cellspacing="10"  width="100%">
					
					<thead style=" color: #78dbf3; background-color: #323846;">
						<tr>
							<th>No</th>
							<th>Nama Pelanggan</th>
							<th>Email Pelanggan</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=0; ?>
						@foreach($pelanggan as $data)
						<?php $no++; ?>
						<tr>
							<td>{{ $no }}</td>
							<td>{{ $data->nama_pelanggan }}</td>
							<td>{{ $data->nama_email }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

	</center>

</section>

@endsection