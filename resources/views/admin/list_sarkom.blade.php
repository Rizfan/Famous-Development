@extends('layouts.main')

@section('title','Manage Saran & Komentar')

@section('content')

<section id="list_sarkom">
	
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
				<h2><b>Manage Saran dan Komentar</b></h2>
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
				<h2><i class="far fa-comment-dots"></i> Data Saran dan Komentar</h2>
			</div>
			<div class="card-body table-responsive ">
				<table id="tablet" class="table table-striped table-bordered" cellpadding="10" cellspacing="10"  width="100%">
					
					<thead style="background-color: #04d0d9; color: #fff">
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Saran & Komentar</th>
						</tr>
					</thead>
					<tbody>
						@if($cek <= 0)
						<tr>
							<td colspan="4">Data Kosong</td>
						</tr>

						@else
							<?php $no=0; ?>
							@foreach($sarkom as $data)
							<?php $no++; ?>
							<tr>
								<td>{{ $no }}</td>
								<td>{{ $data->nama_sarkom }}</td>
								<td>{{ $data->email_sarkom }}</td>
								<td>{{ $data->isi_sarkom }}</td>
							</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>

	</center>


</section>

@endsection