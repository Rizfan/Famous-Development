@extends('layouts.main')

@section('title','Edit Sosmed')

@section('content')

<section id="edit_sosmed">
	
<div class="spacer2"></div>

<div class="container">
	@foreach($sosmed as $data)
	<form method="post" action="/admin/list_sosmed/update_sosmed">
		{{ csrf_field() }}
		<div class="card-header text-center" style="background-color: #323846; color: #78dbf3;">
			<h3>Ubah Sosmed</h3>
		</div>
		<div class="card-body" style="background-color: #c3f7eb; color: #323846">
			
			<input type="hidden" name="id" value="{{ $data->id_sosmed }}">

			<label>Instagram</label><small style="color: red;"> *Masukkan Link Instagram</small> <br>
			<input type="text" class="form-control" name="instagram" value="{{$data->instagram_sosmed}}" placeholder="Instagram"><br>

			<label>Facebook</label><small style="color: red;"> *Masukkan Link Facebook</small> <br>
			<input type="text" class="form-control" name="fb" value="{{$data->fb_sosmed}}" placeholder="Facebook"><br>

			<label>Twitter</label><small style="color: red;"> *Masukkan Link Twitter</small> <br>
			<input type="text" class="form-control" name="twit" value="{{$data->twit_sosmed}}" placeholder="Twitter"><br>

			<a href="/admin/list_sosmed" class="btn btn-block btn-danger">Batal</a>
			<!-- <input type="submit" name="submit" value="Cancel" class="btn btn-block btn-danger"> -->
			<input type="submit" name="submit" value="Simpan" class="btn btn-block btn-primary" onclick="return confirm('Apakah anda Yakin?')">
		</div>
	</form>
	@endforeach
</div>

</section>

@endsection