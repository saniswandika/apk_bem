<?php

namespace App\Http\Controllers;

use App\Models\DataPenyu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPenyuController extends Controller
{
    public function index()
    {
        // $count = DataPenyu::sum('telur_penyu');
        
        $visitors = DataPenyu::select(
            
            DB::raw("(sum(telur_penyu)) as total_penyu"),
            DB::raw("(MONTH(tanggal)) as my_date")
            )
            ->orderBy('tanggal')
            ->groupBy(DB::raw("MONTH(tanggal)"))
            ->get();
            foreach($visitors as $value){
                $visitor = $value->total_penyu;
            }
        $Penyu_bertelur = DataPenyu::select(
            
                DB::raw("(sum(penyu_bertelur)) as Penyu_bertelur"),
                DB::raw("(MONTH(tanggal)) as my_date")
                )
                ->orderBy('tanggal')
                ->groupBy(DB::raw("MONTH(tanggal)"))
                ->get();
                foreach($Penyu_bertelur as $value){
                    $Penyu_bertelur = $value->Penyu_bertelur;
                }
        $jml_penyu_naik = DataPenyu::select(
                    DB::raw("(sum(jml_penyu_naik)) as jml_penyu_naik"),
                    DB::raw("(MONTH(tanggal)) as my_date")
                    )
                    ->orderBy('tanggal')
                    ->groupBy(DB::raw("MONTH(tanggal)"))
                    ->get();
                    foreach($jml_penyu_naik as $value){
                        $jml_penyu_naik = $value->jml_penyu_naik;
                    }
        // dd($penyu_menetas);
        $data = DataPenyu::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.data_penyu.cards',compact('data','visitor','jml_penyu_naik','Penyu_bertelur'));
    }
      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data_penyu.TambahDataPenyu');
    }
     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'jml_penyu_naik' => 'required',
            'penyu_bertelur' => 'required',
            'telur_penyu' => 'required',
            'penyu_menetas' => 'required',
            'tanggal'=> 'required'
        ]);
        
        $data = new DataPenyu;
 
        $data->jml_penyu_naik = $request->jml_penyu_naik ;
        $data->penyu_bertelur = $request->penyu_bertelur;
        $data->telur_penyu = $request->telur_penyu;
        $data->penyu_menetas = $request->penyu_menetas;
        $data->tanggal = $request->tanggal;
        $data->save();
 
        return redirect()->back()->with('message','Data Penyu Berhasil di buat');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'jml_penyu_naik' => 'required',
            'penyu_bertelur' => 'required',
            'telur_penyu' => 'required',
            'penyu_menetas' => 'required',
            // 'tanggal' => 'required',
        ]);
        $data = DataPenyu::find($id);
 
        $data->jml_penyu_naik = $request->jml_penyu_naik ;
        $data->penyu_bertelur = $request->penyu_bertelur;
        $data->telur_penyu = $request->telur_penyu;
        $data->penyu_menetas = $request->penyu_menetas;
        // $data->tanggal = $request->tanggal;
        $data->save();
     
        return redirect()->back()->with('message','Data Penyu Berhasil di update');
    }
     
}
