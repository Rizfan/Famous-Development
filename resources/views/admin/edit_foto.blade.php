@extends('layouts.main')

@section('title','Edit Gambar')

@section('content')
<div class="spacer4"></div>
<section id="tambah_gambar">
	<div class="container">
		<div class="spacer"></div>
		<div class="card">
			@foreach($foto as $data)
			<form method="post" action="/admin/list_foto/update_foto" enctype="multipart/form-data">
				{{ csrf_field() }}

				<div class="card-header text-center" style="background-color: #323846; color: #78dbf3;">
					<h3>Edit Gambar</h3>
				</div>
				<div class="card-body" style="background-color: #c3f7eb; color: #323846">
					<input type="hidden" name="id" value="{{$data->id_foto}}">
					<label>Judul Gambar</label> <br> <input type="text" name="nama_foto" placeholder="Judul Gambar" class="form-control" required="required" value="{{$data->nama_foto}}"> <br/>
					<label>Masukkan Gambar</label>
					<div class="custom-file">
						 <br> <input type="file" value="{{ $data->file_foto }}" name="file_foto"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" class="custom-file-input form-control">
						<label class="custom-file-label" for="inputGroupFile01">Choose file</label> <br/>
					</div>

					<a href="/admin/list_foto" class="btn btn-block btn-danger">Batal</a>
					<button class="btn btn-block btn-primary" type="submit" >Simpan</button>
				</div>
			</form>
			@endforeach
		</div>
	</div>

</section>

@endsection