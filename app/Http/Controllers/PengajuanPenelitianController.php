<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\pengajuan_penelitian;
use App\Models\Publish_penelitian;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class PengajuanPenelitianController extends Controller
{
    public function index()
    {
     
        return view('halaman_depan.Form-pengajuan-Penelitian');
    }
   
   
    public function fileUpload(Request $request)
    {
        $request->validate([
            'Nama_Peneliti' => 'required',
            'Email' => 'required',
            'No_Telepon' => 'required',
            'Alamat' => 'required',
            'objek_peneliatin' => 'required',
            'Judul_Peneliatan' => 'required',
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
        ]);
     
        if ($request->all()) {
            $uploadPath = public_path('uploads');

                if (!File::isDirectory($uploadPath)) {
                    File::makeDirectory($uploadPath, 0755, true, true);
            }

            $file = $request->file('file');
            $explode = explode('.', $file->getClientOriginalName());
            $originalName = $explode[0];
            $extension = $file->getClientOriginalExtension();
            $rename = 'file_' . date('YmdHis') . '.' . $extension;
            $mime = $file->getClientMimeType();
            $filesize = $file->getSize();
           

            if ($file->move($uploadPath, $rename)) {
                $post = new pengajuan_penelitian();
                $post->name = $originalName;
                $post->file = $rename;
                $post->extension = $extension;
                $post->size = $filesize;
                $post->mime = $mime;
                $post->Nama_Peneliti = $request->Nama_Peneliti;
                $post->Email = $request->Email;
                $post->Alamat = $request->Alamat;
                $post->No_Telepon = $request->No_Telepon;
                $post->objek_peneliatin = $request->objek_peneliatin;
                $post->Judul_Peneliatan = $request->Judul_Peneliatan;
                $post->save();
            }
        
            return view('halaman_depan.berhasilPengajuan');
        }
   }
 

}