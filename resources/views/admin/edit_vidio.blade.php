@extends('layouts.main')

@section('title','Edit Vidio')

@section('content')

<section id="edit_vidio">
	<div class="container">
		<div class="spacer2"></div>
		<div class="card">
			@foreach ($vidio as $data)
			<form method="post" action="/admin/list_vidio/update_vidio" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="card-header text-center" style="background-color: #323846; color: #78dbf3;">
					<h3>Ubah vidio</h3>
				</div>
				<div class="card-body" style="background-color: #c3f7eb; color: #323846">
					
					<input type="hidden" name="id" value="{{$data->id_vid}}">
					<label>Masukkan Iframe Vidio</label> <small style="color:red;">*Hapus Width dan Height pada link iframe & tambahkan 'class = "vid"'!</small>
						 <br> <input type="text" value="{{$data->link_vid}}" name="link" class="form-control" required="required" placeholder="<iframe></iframe>">
						  <br/>
					<a href="/admin/list_vidio" class="btn btn-block btn-danger">Batal</a>
					<input type="submit" name="submit" value="Simpan" class="btn btn-block btn-primary">
				</div>
			</form>
			@endforeach
		</div>
	</div>

</section>

@endsection