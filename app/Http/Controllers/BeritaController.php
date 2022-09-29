<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        $data = berita::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.modals',compact('data'));
    }
   
   
    public function TambahBerita(Request $request)
    {
        
        $request->validate([
            'judul_berita' => 'required',
            'deskripsi_berita' => 'required',
            'gambar_image' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        // $input['mata_kuliah '] = $request->input('mata_kuliah ');

        // dd($request);
        if ($request->all()) {
            $uploadPath = public_path('gambar_image');

                if (!File::isDirectory($uploadPath)) {
                    File::makeDirectory($uploadPath, 0755, true, true);
            }

            $file = $request->file('gambar_image');
            $explode = explode('.', $file->getClientOriginalName());
            $originalName = $explode[0];
            $extension = $file->getClientOriginalExtension();
            $rename = 'file_' . date('YmdHis') . '.' . $extension;
            $mime = $file->getClientMimeType();
            $filesize = $file->getSize();
            
            // $dosen =  $request->nama_pembimbing;

            if ($file->move($uploadPath, $rename)) {
                $post = new berita();
                $post->name = $originalName;
                $post->gambar_image = $rename;
                $post->extension = $extension;
                $post->size = $filesize;
                $post->mime = $mime;
                $post->judul_berita = $request->judul_berita;
                $post->deskripsi_berita = $request->deskripsi_berita;
                // $post->gambar_image = $request->gambar_image;
                // dd($post);

                $post->save();
                
            }
        
            return redirect()->back()->with('message', 'IT WORKS!');
        }
   }
   public function show (Request $request, $id)
   {
        $berita = berita::find($id);
        $data = berita::where('beritas.status','1')->orderBy('created_at', 'DESC')->paginate(3);
       return view('halaman_depan.lihatseluruhberita', compact('berita','data'));
   }
   public function destroy(Request $request,$id)
    {
        DB::table('beritas')->where('id', $id)->delete();
        return back()->with('success', 'Succesfully Added');
    }
    function getExcerpt($str, $startPos=0, $maxLength=100) {
        if(strlen($str) > $maxLength) {
            $excerpt   = substr($str, $startPos, $maxLength-3);
            $lastSpace = strrpos($excerpt, ' ');
            $excerpt   = substr($excerpt, 0, $lastSpace);
            $excerpt  .= '...';
        } else {
            $excerpt = $str;
        }
        
        return $excerpt;
    }
    public function update(Request $request,$id)
    {
      
        $request->validate([
            'judul_berita' => 'required',
            'deskripsi_berita' => 'required',
            'gambar_image' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        // dd($request);
        if ($request->all()) {
            $uploadPath = public_path('gambar_image');

            if (!File::isDirectory($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true, true);
            }

            $file = $request->file('gambar_image');
            $explode = explode('.', $file->getClientOriginalName());
            $originalName = $explode[0];
            $extension = $file->getClientOriginalExtension();
            $rename = 'file_' . date('YmdHis') . '.' . $extension;
            $mime = $file->getClientMimeType();
            $filesize = $file->getSize();
            
            // $dosen =  $request->nama_pembimbing;

        $file->move($uploadPath, $rename);
        }
        $post = berita::find($id);
        $post->update([
            'judul_berita'=> $request->judul_berita,
            // 'slug'=>Str::slug($request->slug),
            'deskripsi_berita'=> $request->deskripsi_berita,
            'category_id' => $request->category_id,
            'gambar_image' => $rename
  
        ]);
        return redirect()->back()->with('message', 'IT WORKS!');

    }


}
