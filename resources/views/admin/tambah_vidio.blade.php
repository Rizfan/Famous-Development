@extends('layouts.main')

@section('title','Tambah Vidio')

@section('content')

<section id="tambah_gambar">
	<div class="container">
		<div class="spacer2"></div>
		<div class="card">
			<form method="post" action="/admin/list_vidio/upload_vidio">
				{{ csrf_field() }}
				<div class="card-header text-center" style="background-color: #323846; color: #78dbf3;">
					<h3>Tambah vidio</h3>
				</div>
				<div class="card-body" style="background-color: #c3f7eb; color: #323846">
					
					<label>Masukkan Iframe Vidio</label> <small style="color:red;">*Hapus Width dan Height pada link iframe & tambahkan 'class = "vid"'!</small>
						 <br> <input type="text" name="link" class="form-control" required="required" placeholder="<iframe></iframe>">
						  <br/>

					<input type="submit" name="submit" value="Tambahkan" class="btn btn-block btn-primary">
				</div>
			</form>
		</div>
	</div>

</section>

@endsection