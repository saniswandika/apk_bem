<?php

namespace App\Http\Controllers;

use App\Models\pengajuan_penelitian;
use Illuminate\Http\Request;

class AdminpengajuanPenelitianCntroller extends Controller
{
    public function index()
    {
        $count = pengajuan_penelitian::all()->count();
        $data = pengajuan_penelitian::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.forms',compact('data','count'));
    }
    
}
