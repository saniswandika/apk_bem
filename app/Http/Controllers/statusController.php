<?php

namespace App\Http\Controllers;
use App\models\berita;
use App\Models\pengajuan_penelitian;
use App\Models\Publish_penelitian;
use Illuminate\Http\Request;

class statusController extends Controller
{
    public function updateStatus(Request $request)
    {
        $user = berita::findOrFail($request->user_id);
        $user->status = $request->status;
        $user->save();
    
        return response()->json(['message' => 'User status updated successfully.']);
    }
    public function KonfirmasiPenelitian(Request $request)
    {
        $user = Publish_penelitian::findOrFail($request->pengajuan_id);
        $user->status = $request->status;
        $user->save();
    
        return response()->json(['message' => 'penelitian berhasil di ACC successfully.']);
    }
}
