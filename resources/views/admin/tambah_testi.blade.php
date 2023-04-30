@extends('layouts.main')

@section('title','Tambah Testimoni')

@section('content')
<div class="spacer2"></div>
<section id="tambah_testi">
	<div class="container">
		<!-- <div class="spacer"></div> -->
		<div class="card">
			<form method="post" action="/admin/tambah_testi/upload" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="card-header text-center" style="background-color: #323846; color: #78dbf3;">
					<h3>Tambah Testi</h3>
				</div>
				<div class="card-body" style="background-color: #c3f7eb; color: #323846">
					
					<label>Nama Klien</label> <br> <input type="text" name="nama_testi" class="form-control" required="required" placeholder="Nama"> <br/>

					<label>Jabatan/Pekerjaan Klien</label><br>
					<input type="text" placeholder="Jabatan/Pekerjaan" name="pekerjaan_testi" class="form-control" required="required"><br>

					<label>Masukkan Foto Klien</label>
					<div class="custom-file">
						 <br> <input type="file" name="foto_testi"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" class="custom-file-input form-control" required="required">
						<label class="custom-file-label" for="inputGroupFile01">Choose file</label> 
					</div>

					<label>Isi testi</label> <br>
					<textarea class="form-control" name="isi_testi" required="required"  rows="10" cols="50" id="konten"></textarea><br/>


					<button class="btn btn-block btn-primary" type="submit" >Tambahkan</button>
				</div>
			</form>
		</div>
	</div>

</section>

@endsection