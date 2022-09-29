<?php

namespace App\Http\Controllers;


use App\Models\Publish_penelitian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class PublishPenelitianController extends Controller
{
    public function index()
    {   
        $data = Publish_penelitian::orderBy('created_at', 'DESC')->paginate(10);
        $count = Publish_penelitian::all()->count();
        return view('admin.charts', compact('data','count'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul_penelitian' => 'required',
            'nama_penelitian' => 'required',
            'waktu_penelitian' => 'required',
            'objek_penelitian' => 'required',
            'file_publish' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
        ]);
        // $input['mata_kuliah '] = $request->input('mata_kuliah ');
// dd($request);
        if ($request->all()) {
            $uploadPath = public_path('uploads');

                if (!File::isDirectory($uploadPath)) {
                    File::makeDirectory($uploadPath, 0755, true, true);
            }

            $file = $request->file('file_publish');
            $explode = explode('.', $file->getClientOriginalName());
            $originalName = $explode[0];
            $extension = $file->getClientOriginalExtension();
            $rename = 'file_' . date('YmdHis') . '.' . $extension;
            $mime = $file->getClientMimeType();
            $filesize = $file->getSize();
            

            if ($file->move($uploadPath, $rename)) {
                $post = new Publish_penelitian();
                $post->file_publish = $originalName;
                $post->file_publish = $rename;
                $post->extension = $extension;
                $post->size = $filesize;
                $post->mime = $mime;
                $post->nama_penelitian = $request->nama_penelitian;
                $post->judul_penelitian = $request->judul_penelitian;
                $post->waktu_penelitian = $request->waktu_penelitian;
                $post->objek_penelitian = $request->objek_penelitian;
                $post->deskripsi_penelitian = $request->deskripsi_penelitian;
                $post->save();
                
            }
        
            return redirect()->back()->with('message', 'IT WORKS!');
        }
    }
    public function update(Request $request,$id)
    {
        $request->validate([
  
            'deskripsi_penelitian' => 'required',
        ]);
        $syarat = Publish_penelitian::find($id);

        $syarat->deskripsi_penelitian = $request->input('deskripsi_penelitian');    
        // dd($syarat);      
        $syarat->update();
        return redirect()->back()->with('message', 'IT WORKS!');
 
    }
}