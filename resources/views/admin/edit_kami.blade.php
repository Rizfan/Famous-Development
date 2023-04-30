@extends('layouts.main')

@section('title','Edit Tentang Kami')

@section('content')


<section id="edit_kami">
	
<div class="spacer2"></div>

<div class="container">
	<!-- <?php $no=0; ?> -->
	@foreach($kami as $data)
	<form method="post" action="/admin/update_kami">
		{{ csrf_field() }}
		<div class="card-header text-center" style="background-color: #323846; color: #78dbf3;">
			<h3>Ubah Tentang Kami</h3>
		</div>
		<div class="card-body" style="background-color: #c3f7eb; color: #323846">
			
			<input type="hidden" name="id" value="{{ $data->id_kami }}">

			<label>Visi</label> <br>
			<textarea class="form-control" name="visi" id="konten"  rows="10" cols="50">{{ $data->visi_kami }}</textarea><br>
			<!-- <?php $no++ ?> -->
<!-- 
			<div id="visi_row">
				<div class="row  mb-2">
					<div class="col-md-10 col-sm-10 col-10">
						<input type="text" value="visi.{{$no}} " class="form-control">
					</div>
	                <div class="col-md-2 col-sm-2 col-2">
	                    <a onclick="add_row()" href="#" class="btn btn-primary btn-sm">+</a>
	                </div>
	            </div>
			</div>
            <div id="visiii">
                
            </div>
 -->
			<label>Misi</label><br>
			<textarea class="form-control" name="misi"  rows="10" cols="50" id="konten1">{{ $data->misi_kami }}</textarea><br>

			<label>Tentang Kami</label><br>
			<textarea class="form-control" name="tentang"  rows="10" cols="50" id="konten2">{{ $data->tentang_kami }}</textarea><br>

			<a href="/admin/dashboard" class="btn btn-block btn-danger">Batal</a>
			<!-- <input type="submit" name="submit" value="Cancel" > -->
			<input type="submit" name="submit" value="Simpan" class="btn btn-block btn-primary" onclick="return confirm('Apakah anda Yakin?')">
		</div>
	</form>
	@endforeach
</div>

</section>

<script type="text/javascript">
	
    function add_row(){
        var visiii = document.getElementById('visi_row').innerHTML;
        var new_row = document.getElementById('visiii').innerHTML;
        
        document.getElementById('visiii').innerHTML = new_row + visiii;
    }
</script>

@endsection


<!-- https://wa.me/6282256349900?text=Hallo,%20Saya%20ingin%20Berlangganan%20di%20FAMOUS%20Development -->