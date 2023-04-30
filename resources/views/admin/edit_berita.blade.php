@extends('layouts.main')

@section('title','Edit Berita')

@section('content')
<div class="spacer4"></div>
<section id="ubah_berita">
	<div class="container">
		<div class="spacer"></div>
		<div class="card">
			@foreach($berita as $data)
			<form method="post" action="/admin/edit_berita/update" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="card-header text-center" style="background-color: #323846; color: #78dbf3;">
					<h3>Edit Berita</h3>
				</div>
				<div class="card-body" style="background-color: #c3f7eb; color: #323846">
					<input type="hidden" name="id" value="{{ $data->id_berita }}">
					
					<label>Judul Berita</label> <br> <input type="text" name="judul_berita" class="form-control" placeholder="Judul Berita" required="required" value="{{ $data->judul_berita }}"> <br/>
					<label>Masukkan Cover Berita</label>
					<div class="custom-file">
						 <br> <input type="file" name="cover_berita"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" class="custom-file-input form-control" value="{{'/file_berita/'.$data->cover_berita }}">
						<label class="custom-file-label" for="inputGroupFile01">Choose file</label> 
					</div>

					<label>Ringkasan Berita</label> <br>
					<textarea class="form-control" name="ringkasan_berita" required="required"  rows="10" cols="50"  id="konten1">{!!$data->ringkasan_berita!!}</textarea><br/>

					<label>Isi Berita</label> <br>
					<textarea class="form-control" name="isi_berita" required="required"  rows="10" cols="50" id="konten">{!!$data->isi_berita!!}</textarea><br/>


					<a href="/admin/list_berita"class="btn btn-block btn-danger">Batal</a>
					<button class="btn btn-block btn-primary" type="submit" >Perbarui</button>
				</div>
			</form>
			@endforeach
		</div>
	</div>

</section>

@endsection