<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gaess</title>
    <style>
        body {
            background-color:#bdc3c7;
            margin:0;
        }
        .card {
            background-color:#fff;
            padding:20px;
            margin:20%;
            text-align:center;
            margin:0px auto;
            width: 580px; 
            max-width: 580px;
            margin-top:10%;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .garis {
            width: 75%;
        }
        
    </style>
</head>
<body>
    <div class="card">

        <img src="{{url('/img/crop_image.jpg')}}"  style="width: 100%; ">
        @foreach($pelanggan as $data)
        <h2>Hi!, {{$data->nama_pelanggan}}</h2>
        <h3 class="">Terima Kasih telah Berlangganan dengan kami</h3>
        <hr class="garis">
        <h4>Nantikan update update terbaru pada website kami.</h4>

        <a href="https://famousdev.cyberwarrior.co.id">Klik Disini untuk membuka Website Kami.</a>
        @endforeach
        <!-- <p>Selamat anda telah melakuka registrasi.</p> -->
    </div>
</body>
</html>