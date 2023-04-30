@extends('layouts.main')

@section('title','Hubungi Kami')

@section('css')

<style type="text/css">
.map{
    width: 610px;
    height: 500px;
}

@media screen and (max-width: 768px){
    .map{
        max-width: 370px;
        max-height: 300px;
    }
}
</style>

@endsection

@section('content')


@if (session('alert'))
<script>		
 alert("{{ session('alert') }}")
</script>
@endif

<!-- Header -->
<section id="header">

    <div class="bg-img3 animated fadeIn">

        <div class="dark">

            <center>

                <div class="center">
                    <h1 class="animated bounceInDown" style="color: white; font-size: 400%;">HUBUNGI KAMI</h1>

                </div>

            </center>

        </div>

    </div>
</section>


<section id="kontak">
    <div class="spacer2"></div>
    <div class="container card card-body animated bounceInUp">
        @foreach($kontak as $data)

        <div class="row">
            <div class="col col-lg-5 col-md-5 col-xl-5" style="font-size: 18px;">
                <p>Hubungi Kami</p>
                <hr>
                <p><i class="fas fa-phone-alt"></i>&nbsp;+62{{ $data->tel_kon }}</p>
                <p><i class="fab fa-whatsapp"></i>&nbsp;+62{{$data->wa_kon}}</p>
                <p><i class="fa fa-envelope"></i>&nbsp;{{$data->email_kon}}</p>
                <p><i class="fa fa-map-marked-alt"></i>&nbsp;{{$data->alamat_kon}}</p>
                <!-- <i class="fa fa-email-alt"></i>&nbsp;{{$data->email_kon}}<br> -->
                <!-- <i class="fa whatsapp"></i>&nbsp;{{ $data->tel_kon }}<br> -->
                <?php $sosmed = DB::table('sosmed')->get() ?>
                @foreach($sosmed as $sos)
                <br>
                <p>Sosial Media</p>
                <hr>
                <ul class="list-unstyled">
                    <li>
                        <p><i class="fab fa-instagram"></i>
                            <a href="{{$sos->instagram_sosmed}}" target="_blank" class="alink-team">Instagram</a></p>
                        </li>
                        <li>
                            <p><i class="fab fa-facebook"></i>
                                <a href="{{$sos->fb_sosmed}}" class="alink-team">Facebook</a></p>
                            </li>
                            <li>
                                <p><i class="fab fa-twitter"></i>
                                    <a href="{{$sos->twit_sosmed}}" class="alink-team">Twitter</a></p>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                        <div class="col col-lg-5 col-md-5 col-xl-5">

                            {!!$data->iframe_kon!!}

                        </div>
                    </div>

                    @endforeach


                    <!-- sarkom -->
                    <hr>
                    <div class="col"  style="font-size: 18px;">
                      <form method="post" action="/kontak/sarkom" enctype="multipart/form-data">
                         {{ csrf_field() }}
                         <p class="text-center">Berikan Saran & Komentar Untuk Kami!</p>
                         <hr style="width: 50px; border: 2px solid #1f2861;">

                         <label>Nama</label><br>
                         <input type="text" name="nama" class="form-control" required="required" placeholder="Nama"><br>

                         <label>Email</label><br>
                         <input type="email" name="email" class="form-control" required="required" placeholder="Email"><br>

                         <label>Saran & Komentar</label><br>
                         <textarea name="sarkom" class="form-control"  required="required" placeholder="Saran & Komentar"></textarea><br>

                         <button type="submit" class="btn btn-block btn-primary">Kirim</button>

                     </form>
                 </div>
             </div>
         </section>




         @endsection