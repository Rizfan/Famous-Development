<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\galeri;
use App\berita;

use Illuminate\Support\Facades\Mail;
use App\Mail\email_berita;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }


// dashboard
    public function dash()
    {
        $user = DB::table('users')->count();
        $berita= DB::table('berita')->count();
        $video= DB::table('video')->count();
        $galeri= DB::table('galeri')->count();
        $pelanggan= DB::table('pelanggan')->count();
        $testi = DB::table('testi')->count();
        $sarkom = DB::table('sarkom')->count();
        return view('/admin/dashboard',['users'=>$user,'berita'=>$berita,'video'=>$video,'galeri'=>$galeri,'pelanggan'=>$pelanggan,'testi'=>$testi,'sarkom'=>$sarkom]);
    }


// dashboard_end


    // Pelanggan
    public function list_pelanggan()
    {
        $pelanggan = DB::table('pelanggan')->get();

        return view('/admin/list_pelanggan',['pelanggan'=>$pelanggan]);
    }


    // Pelanggan_end





// Galeri
    public function tambah_foto()
    {
        return view ('/admin/tambah_foto');
    }

    public function upload_foto(request $request)
    {
        $this->validate($request, [
            'nama_foto' => 'required',
            'file_foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
 
        // menyimpan data file yang diupload ke variabel $file
        $file_foto = $request->file('file_foto');
 
        $nama_file = time()."_".$file_foto->getClientOriginalName();
 
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'file_galeri';
        $file_foto->move($tujuan_upload,$nama_file);
 
        Galeri::create([
            'nama_foto' => $request->nama_foto,
            'file_foto' => $nama_file,
        ]);
 
        return redirect('/admin/list_foto')->with('alert','Berhasil Menambahkan Foto');
    }

    public function list_foto()
    {
        $foto =DB::table('galeri')->get();

        return view('/admin/list_foto',['foto'=>$foto]);
    }

    public function hapus_foto($id)
    {
        DB::table('galeri')->where('id_foto',$id)->delete();

        return redirect('/admin/list_foto')->with('alert','Berhasil Menghapus Foto');
    }

    public function edit_foto($id)
    {
        $foto = DB::table('galeri')->where('id_foto',$id)->get();

        return view('/admin/edit_foto',['foto'=>$foto]);
    }

    public function update_foto(Request $request)
    {
        $this->validate($request, [

            'nama_foto' => 'required',
            'file_foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        if ($request->file_foto == NULL) {
            
            DB::table('galeri')->where('id_foto',$request->id)->update([
                'nama_foto' => $request->nama_foto,
            ]);
        }

        else{
            // menyimpan data file yang diupload ke variabel $file
            $file_foto = $request->file('file_foto');
     
            $nama_file = time()."_".$file_foto->getClientOriginalName();
     
                    // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'file_galeri';
            $file_foto->move($tujuan_upload,$nama_file);
     
            DB::table('galeri')->where('id_foto',$request->id)->update([
                'nama_foto' => $request->nama_foto,
                'file_foto' => $nama_file,
            ]);
        }
 
        return redirect('/admin/list_foto')->with('alert','Berhasil Mengubah Foto');
    }

    // galeri_end


    // video

    public function tambah_vidio()
    {
        return view('/admin/tambah_vidio');
    }

    public function list_vidio()
    {
        $vidio = DB::table('video')->get();

        return view('/admin/list_vidio',['vidio'=>$vidio]);
    }


    // method untuk insert data ke table pegawai
    public function upload_vidio(Request $request)
    {
        // insert data ke table pegawai
        DB::table('video')->insert([
            'link_vid' => $request->link
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/admin/list_vidio')->with('alert','Berhasil Menambahkan Vidio');
     
    }

    public function hapus_vidio($id)
    {
        DB::table('video')->where('id_vid',$id)->delete();

        return redirect('/admin/list_vidio')->with('alert','Berhasil Menghapus Vidio');
    }

    public function edit_vidio($id)
    {
        $vidio = DB::table('video')->where('id_vid',$id)->get();
        
        return view('/admin/edit_vidio',['vidio'=>$vidio]);
    }

    public function update_vidio(Request $request)
    {
        DB::table('video')->where('id_vid',$request->id)->update([
        'link_vid' => $request->link
        ]);

        return redirect('/admin/list_vidio')->with('alert','Berhasil Mengubah Vidio');
    } 


    // Video_end


    // Tentang Kami
    public function edit_kami($id){
        
        $kami = DB::table('kami')->where('id_kami',$id)->get();

        return view('/admin/edit_kami',['kami'=>$kami]);
    }

    public function update_kami( Request $request)
    {
        DB::table('kami')->where('id_kami',$request->id)->update([
            'visi_kami' => $request->visi,
            'misi_kami' => $request->misi,
            'tentang_kami' => $request->tentang
        ]);

        return redirect('/admin/dashboard')->with('alert','berhasil');
    }



    // tentang_kami_end

    // Kontak
    public function edit_kontak($id)
    {
        $kontak = DB::table('kontak')->where('id_kon',$id)->get();

        return view('/admin/edit_kontak',['kontak'=>$kontak]);
    }

    public function list_kontak()
    {
        $kontak = DB::table('kontak')->get();

        return view('/admin/list_kontak',['kontak'=>$kontak]);
    }

    public function hapus_kontak()
    {
        DB::table('kontak')->delete();

        return redirect('/admin/list_kontak')->with('alert','Berhasil Menghapus Kontak');
    }

    public function update_kontak(Request $request)
    {
        DB::table('kontak')->where('id_kon',$request->id)->update([
            'tel_kon' => $request->notlp,
            'wa_kon' => $request->wa,
            'email_kon' => $request->email,
            'alamat_kon' => $request->alamat,
            'iframe_kon' => $request->iframe
        ]);
        return redirect('/admin/list_kontak')->with('alert','Berhasil Mengubah Kontak');
    }

    // End_kontak


    // berita

    public function list_berita()
    {
        $berita = DB::table('berita')->get();

        return view('/admin/list_berita',['berita'=>$berita]);
    }

    public function tambah_berita()
    {
        return view ('/admin/tambah_berita');
    }

    public function upload_berita(Request $request)
    {
        $this->validate($request, [
            'cover_berita' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'judul_berita' => 'required',
            'ringkasan_berita' => 'required',
            'isi_berita' => 'required',
            'tanggal_berita' => 'required',

        ]);
 
        // menyimpan data file yang diupload ke variabel $file
        $file_berita = $request->file('cover_berita');
 
        $nama_file = time()."_".$file_berita->getClientOriginalName();
 
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'file_berita';
        $file_berita->move($tujuan_upload,$nama_file);
 
        Berita::create([
            'cover_berita' => $nama_file,
            'judul_berita' => $request->judul_berita,
            'ringkasan_berita' => $request->ringkasan_berita,
            'isi_berita' => $request->isi_berita,
            'tanggal_berita' => $request->tanggal_berita,

        ]);

        $pelanggan = DB::table('pelanggan')->get();
        foreach($pelanggan as $data){
        Mail::to($data->nama_email)->send(new email_berita($data->nama_email));
        }

        return redirect('/admin/list_berita')->with('alert','Berhasil Menambahkan Berita');
    }

    public function update_berita(Request $request)
    {
        $this->validate($request, [
            'cover_berita' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'judul_berita' => 'required',
            'ringkasan_berita' => 'required',
            'isi_berita' => 'required',
        ]);
        
        if ($request->cover_berita == NULL){

            DB::table('berita')->where('id_berita',$request->id)->update([
                'judul_berita' => $request->judul_berita,
                'ringkasan_berita' => $request->ringkasan_berita,
                'isi_berita' => $request->isi_berita,
            ]);
        }
        else{
            // menyimpan data file yang diupload ke variabel $file
            $file_berita = $request->file('cover_berita');
     
            $nama_file = time()."_".$file_berita->getClientOriginalName();
     
                    // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'file_berita';
            $file_berita->move($tujuan_upload,$nama_file);
        
        DB::table('berita')->where('id_berita',$request->id)->update([
            'cover_berita' => $nama_file,
            'judul_berita' => $request->judul_berita,
            'ringkasan_berita' => $request->ringkasan_berita,
            'isi_berita' => $request->isi_berita,
            'tanggal_berita' => $request->tanggal_berita,
        ]);
        }
 
        return redirect('/admin/list_berita')->with('alert','Berhasil Mengubah Berita');
    }

    public function edit_berita($id)
    {
        $berita = DB::table('berita')->where('id_berita',$id)->get();

        return view('/admin/edit_berita',['berita'=>$berita]);
    }

    public function hapus_berita($id)
    {
        DB::table('berita')->where('id_berita',$id)->delete();

        return redirect('/admin/list_berita');
    }

    // Sosmed
    public function list_sosmed()
    {
        $sosmed = DB::table('sosmed')->get();

        return view('/admin/list_sosmed',['sosmed'=>$sosmed]);
    }
    public function edit_sosmed($id)
    {
        $sosmed = DB::table('sosmed')->where('id_sosmed',$id)->get();

        return view('/admin/edit_sosmed',['sosmed'=>$sosmed]);
    }
    public function update_sosmed(Request $request)
    {
        DB::table('sosmed')
        ->where('id_sosmed',$request->id)
        ->update([
            'instagram_sosmed'=>$request->instagram,
            'fb_sosmed'=>$request->fb,
            'twit_sosmed'=>$request->twit
            ]);
        return redirect('/admin/list_sosmed');
    }



    // Testimoni

    public function list_testi()
    {
        $testi = DB::table('testi')
        ->get();

        return view('/admin/list_testi',['testi'=>$testi]);
    }

    public function tambah_testi(){
        return view('/admin/tambah_testi');
    }

    public function upload_testi(Request $request)
    {
            $this->validate($request, [
                'nama_testi' => 'required',
                'pekerjaan_testi' => 'required',
                'foto_testi' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
                'isi_testi' => 'required'
                
            ]);

            // menyimpan data file yang diupload ke variabel $file
            $file_testi = $request->file('foto_testi');
     
            $nama_file = time()."_".$file_testi->getClientOriginalName();
     
                    // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'file_testi';
            $file_testi->move($tujuan_upload,$nama_file);
        
        DB::table('testi')->insert([
            'nama_testi' => $request->nama_testi,
            'pekerjaan_testi' => $request->pekerjaan_testi,
            'foto_testi' => $nama_file,
            'isi_testi' => $request->isi_testi,
        ]);
        return redirect('/admin/list_testi')->with('alert','Berhasil Menambah Testimoni');
    }

    public function hapus_testi($id)
    {
        DB::table('testi')->where('id_testi',$id)->delete();

        return redirect('/admin/list_testi')->with('alert','Berhasil Menghapus Testimoni');
    }

    public function edit_testi($id)
    {
        $testi=DB::table('testi')->where('id_testi',$id)->get();

        return view('/admin/edit_testi',['testi'=>$testi]);
    }

    public function update_testi(Request $request)
    {
        $this->validate($request, [
            'nama_testi' => 'required',
            'pekerjaan_testi' => 'required',
            'foto_testi' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'isi_testi' => 'required'
            
        ]);

        if ($request->foto_testi == NULL) {
            DB::table('testi')->where('id_testi',$request->id)->update([
                'nama_testi' => $request->nama_testi,
                'pekerjaan_testi' => $request->pekerjaan_testi,
                'isi_testi' => $request->isi_testi,
            ]);

            return redirect('/admin/list_testi')->with('alert','Berhasil Mengedit Testimoni');
        }
        else{

            // menyimpan data file yang diupload ke variabel $file
            $file_testi = $request->file('foto_testi');
     
            $nama_file = time()."_".$file_testi->getClientOriginalName();
     
                    // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'file_testi';
            $file_testi->move($tujuan_upload,$nama_file);
        
            DB::table('testi')->where('id_testi',$request->id)->update([
                'nama_testi' => $request->nama_testi,
                'pekerjaan_testi' => $request->pekerjaan_testi,
                'foto_testi' => $nama_file,
                'isi_testi' => $request->isi_testi,
            ]);
            return redirect('/admin/list_testi')->with('alert','Berhasil Mengubah Testimoni');
        }
    }

    // Sarkom
    public function list_sarkom(){
        $cek =  DB::table('sarkom')->count();
        $sarkom = DB::table('sarkom')->get();

        return view('/admin/list_sarkom',['sarkom'=>$sarkom,'cek'=>$cek]);
    }
}