<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Pelanggan;

use Illuminate\Support\Facades\Mail;
use App\Mail\Email;


class FrontController extends Controller
{
    public function pelanggan(Request $request)
    {   
        $cek = DB::table('pelanggan')->where('nama_email',$request->email)->count();
        if ($cek > 0) {
            return redirect('/#pelanggan')->with('alert','Email Anda Sudah Berlangganan');
        }
        else{
            DB::table('pelanggan')->insert([
                'nama_pelanggan' => $request->nama,
                'nama_email' => $request->email, 

            ]);

            $pelanggan = DB::table('pelanggan')->where('nama_email',$request->email)->first();

            Mail::to($pelanggan->nama_email)->send(new Email($pelanggan->nama_email));

            return redirect('/#pelanggan')->with('alert','Email Anda Berhasil didaftarkan');
        }
    }

    public function index_galeri()
    {
        $gal = DB::table('galeri')->limit('10')->get();

        $kontak = DB::table('kontak')->get();

        $testi = DB::table('testi')->limit('5')->get();

        $kami = DB::table('kami')->get();

        return view('index',['gal'=>$gal,'kami'=>$kami,'kontak'=>$kontak,'testi'=>$testi]);
    }





    // Galeri

    public function galeri()
    {
        $galeri = DB::table('galeri')->get();

        return view('galeri',['galeri'=>$galeri]);
    }


    // Vidio

    public function vidio()
    {
        $vidio = DB::table('video')->get();

        return view('vidio',['vidio'=>$vidio]);
    }


    // Tentang kami

    public function tentang()
    {
        $kami = DB::table('kami')->get();

        return view('tentang_kami',['kami'=>$kami]);
    }


    //Hubungi kami

    public function hub()
    {
        $kontak = DB::table('kontak')->get();

        return view('kontak',['kontak'=>$kontak]);
    }

    //Berita

    public function berita()
    {
        $berita = DB::table('berita')->get();

        return view('berita',['berita'=>$berita]);
    }

    public function detail_berita($id)
    {
        $berita = DB::table('berita')->where('id_berita',$id)->get();

        return view('detail_berita',['berita'=>$berita]);
    }

    // sarkom
    public function sarkom(Request $request)
    {
        DB::table('sarkom')->insert([
            'nama_sarkom'=>$request->nama,
            'email_sarkom'=>$request->email,
            'isi_sarkom'=>$request->sarkom
        ]);

        return redirect('/kontak')->with('alert','Terima Kasih Telah Memberikan Saran dan Komentar pada Kami!');
    }
}
