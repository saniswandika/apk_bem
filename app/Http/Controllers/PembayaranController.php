<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use App\Models\user;
use App\Models\UserPembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


class PembayaranController extends Controller
{
    public function index()
    {
         $user = user::all();
         $profileimage = user::where('id', Auth::user()->id)->first();
       
        return view('pengunjunglogin.dashboard', compact('user','profileimage'));
    }
    public function update(Request $request)
    {

        // dd($request);
        $request->validate([
            'upload_pembayaran' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
        // dd($request);
        $employee = user::where('id', Auth::user()->id)->first();

        if ($request->hasfile('upload_pembayaran')){
            $file = $request->file('upload_pembayaran');
            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $file->move(public_path().'\imagineprofil',$filename);
            $employee->upload_pembayaran=$filename;
        } else {
            return $request;
            $employee->upload_pembayaran='';
        }

        if($employee->save()){
            return redirect()->back()->with('message', 'IT WORKS!');
        }
    }

}
