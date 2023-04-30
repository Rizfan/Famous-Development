@extends('layouts.main')

@section('title','Tambah Berita')

@section('content')
<div class="spacer2"></div>
<section id="tambah_berita">
	<div class="container">
		<!-- <div class="spacer"></div> -->
		<div class="card">
			<form method="post" action="/admin/tambah_berita/upload" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="card-header text-center" style="background-color: #323846; color: #78dbf3;">
					<h3>Tambah Berita</h3>
				</div>
				<div class="card-body" style="background-color: #c3f7eb; color: #323846">
					
					<label>Judul Berita</label> <br> <input type="text" name="judul_berita" class="form-control" required="required" placeholder="Judul Berita"> <br/>
					<label>Masukkan Cover Berita</label>
					<div class="custom-file">
						 <br> <input type="file" name="cover_berita"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" class="custom-file-input form-control" required="required">
						<label class="custom-file-label" for="inputGroupFile01">Choose file</label> 
					</div>

					<label>Ringkasan Berita</label> <br>
					<textarea class="form-control" name="ringkasan_berita" placeholder="Ringkasan Berita" required="required"  rows="10" cols="50"  id="konten1"></textarea><br/>

					<label>Isi Berita</label> <br>
					<textarea class="form-control" name="isi_berita" required="required" placeholder="Isi Berita" rows="10" cols="50" id="konten"></textarea><br/>

					<input type="hidden" name="tanggal_berita" value="{{ date('d F Y') }}">

					<button class="btn btn-block btn-primary" type="submit" >Tambahkan</button>
				</div>
			</form>
		</div>
	</div>

</section>

@endsection