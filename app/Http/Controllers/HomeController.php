<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\publish_penelitian;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Models\DataPenyu;
use App\Models\status;
use App\Models\pembayaran;

class HomeController extends Controller
{
    public function index(Request $request)
    {
      
        $visitors = DataPenyu::select(
            
            DB::raw("(sum(telur_penyu)) as total_penyu"),
            DB::raw("(MONTHNAME(tanggal)) as my_date")
            )
            ->orderBy('tanggal')
            ->groupBy(DB::raw("MONTHNAME(tanggal)"))
            ->pluck('total_penyu', 'my_date');
            
            
            $labels = $visitors->keys();
            $date = $visitors->values();
            
            // dd($visitor);

        $data = berita::where('beritas.status','1')->orderBy('created_at', 'DESC')->paginate(3);
        $penelitian = publish_penelitian::where('publish_penelitians.status','1')->orderBy('created_at', 'DESC')->paginate(8);
     
        $data->setCollection($data->sortByDesc('created_at'));
        return view('halaman_depan.HomeBlog', compact('data','labels','date','penelitian'));
      
    }
    public function search(Request $request)
    {
        // $cari = $request->cari;
		// $pegawai = DB::table('publish_penelitians')
        // ->Where('nama_penelitian', function($query) use ($cari){
        //     $query->where('Nama_peneliti','LIKE','%'.$cari.'%');
        // })
        // ->paginate();
             $cari = $request->cari;
        $customer = DB::table('publish_penelitians')
        ->where('publish_penelitians.Nama_Penelitian', 'LIKE', "%$cari%")
        // ->orWhere('customer.phone', 'LIKE', "%$findcustomer%")
        ->get();
        dd($customer);
        return redirect()->back()->with('message', 'IT WORKS!');
    }
   
}
