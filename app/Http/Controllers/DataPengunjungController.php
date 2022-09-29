<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use App\Models\user;
use App\Models\status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class DataPengunjungController extends Controller
{
    public function index()
    {
        $categories= status::all();
        $bayar = pembayaran::orderBy('created_at', 'DESC')->paginate(10);
        $data = user::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.buttons',compact('data','bayar','categories'));
    }
    public function update(Request $request,$id)
    {
      
        $syarat = user::find($id);

        // $syarat->keterangan = $request->input('keterangan');
        // $syarat->nama_pembimbing = $request->input( 'nama_pembimbing');
        $syarat->status_id = $request->input('status_id');
        $syarat->update();
        return redirect()->back()->with('message', 'IT WORKS!');
 
    }
    
}
