@extends('layouts.main')

@section('title','Edit Kontak')

@section('content')

<section id="edit_kontak">
	
<div class="spacer2"></div>

<div class="container">
	@foreach($kontak as $data)
	<form method="post" action="/admin/list_kontak/update_kontak">
		{{ csrf_field() }}
		<div class="card-header text-center" style="background-color: #323846; color: #78dbf3;">
			<h3>Ubah Kontak</h3>
		</div>
		<div class="card-body" style="background-color: #c3f7eb; color: #323846">
			
			<input type="hidden" name="id" value="{{ $data->id_kon }}">

			<label>No. Telepon</label><br>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1">+62</span>
			  </div>
			  <input type="text" class="form-control" name="notlp" value="{{$data->tel_kon}}" aria-describedby="basic-addon1">
			</div>
			<!-- <input type="number" name="notlp" class="form-control" value="{{$data->tel_kon}}"><br> -->
			<!-- <textarea class="form-control" name="notlp">{{ $data->tel_kon }}</textarea> -->

			<label>No. WhatsApp</label><br>
			<!-- <input type="number" name="wa" class="form-control" value="{{$data->wa_kon}}"><br> -->
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1">+62</span>
			  </div>
			  <input type="text" class="form-control" name="wa" value="{{$data->wa_kon}}" aria-describedby="basic-addon1">
			</div>

			<label>Email</label><br>
			<input type="email" name="email" class="form-control" value="{{$data->email_kon}}"><br>
			<!-- <textarea class="form-control" name="email">{{ $data->email_kon }}</textarea><br> -->

			<label>Alamat</label>
			<textarea class="form-control" name="alamat">{{$data->alamat_kon}}</textarea><br>

			<label>Masukkan Iframe Alamat</label><small style="color:red;">*Hapus Width dan Height pada link iframe & tambahkan `class="map"`!</small>
			<input type="text" name="iframe" class="form-control" value="{{$data->iframe_kon}}"><br> 

			<a href="/admin/list_kontak" class="btn btn-block btn-danger">Batal</a>
			<!-- <input type="submit" name="submit" value="Cancel" class="btn btn-block btn-danger"> -->
			<input type="submit" name="submit" value="Simpan" class="btn btn-block btn-primary" onclick="return confirm('Apakah anda Yakin?')">
		</div>
	</form>
	@endforeach
</div>

</section>

@endsection