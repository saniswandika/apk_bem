<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatSeluruhBeritaController extends Controller
{
    public function show(Request $request, $id)
    {
        // post::find($id)->increment('views');
        $post = Publish_penelitian::find($id);
        // $user = User::where('name','basit') -> first();
        // $posts = post::orderBy('updated_at', 'DESC')->paginate(2);
        // $posts->setCollection($posts->sortByDesc('created_at'));
    
        // $berita = post::orderBy('created_at', 'DESC')->paginate(2);
        // $berita->setCollection($berita->sortByDesc('created_at'));

        
        return view('halaman_depan.PostPenelitianBlog',compact('post'));
    }  
}
