@extends('layouts.main')

@section('title','Edit Testimoni')

@section('content')
<div class="spacer2"></div>
<section id="tambah_testi">
	<div class="container">
		<div class="card">
			@foreach($testi as $data)
			<form method="post" action="/admin/tambah_testi/update" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="card-header text-center" style="background-color: #323846; color: #78dbf3;">
					<h3>Ubah Testi</h3>
				</div>
				<input type="hidden" name="id" value="{{$data->id_testi}}">
				<div class="card-body" style="background-color: #c3f7eb; color: #323846">
					
					<label>Nama Klien</label> <br> <input type="text" name="nama_testi" value="{{$data->nama_testi}}" class="form-control" required="required" placeholder="Nama"> <br/>

					<label>Jabatan/Pekerjaan Klien</label><br>
					<input type="text" name="pekerjaan_testi" class="form-control" required="required" placeholder="Jabatan/Pekerjaan" value="{{$data->pekerjaan_testi}}"><br>

					<label>Masukkan Foto Klien</label>
					<div class="custom-file">
						 <br> <input type="file" name="foto_testi"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" class="custom-file-input form-control">
						<label class="custom-file-label" for="inputGroupFile01">Choose file</label> 
					</div>

					<label>Isi testi</label> <br>
					<textarea class="form-control" name="isi_testi" required="required" placeholder=""  rows="10" cols="50" id="konten">{!!$data->isi_testi!!}</textarea><br/>

					<a href="/admin/list_testi" class="btn btn-block btn-danger">Batal</a>
					<button class="btn btn-block btn-primary" type="submit" >Simpan</button>
				</div>
			</form>
			@endforeach
		</div>
	</div>

</section>

@endsection