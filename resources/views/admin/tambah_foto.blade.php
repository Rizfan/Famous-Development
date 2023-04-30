@extends('layouts.main')

@section('title','Tambah Gambar')

@section('content')
<div class="spacer2"></div>
<section id="tambah_gambar">
	<div class="container">
		<div class="card">
			<form method="post" action="/admin/tambah_foto/upload" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="card-header text-center" style="background-color: #323846; color: #78dbf3;">
					<h3>Tambah Gambar</h3>
				</div>
				<div class="card-body" style="background-color: #c3f7eb; color: #323846">
					
					<label>Judul Gambar</label> <br> <input type="text" name="nama_foto" class="form-control" required="required" placeholder="Judul Gambar"> <br/>
					<label>Masukkan Gambar</label>
					<div class="custom-file">
						 <br> <input type="file" name="file_foto"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" class="custom-file-input form-control" required="required">
						<label class="custom-file-label" for="inputGroupFile01">Choose file</label> <br/>
					</div>

					<button class="btn btn-block btn-primary" type="submit" >Tambahkan</button>
				</div>
			</form>
		</div>
	</div>

</section>

@endsection