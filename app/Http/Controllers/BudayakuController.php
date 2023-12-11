<?php

namespace App\Http\Controllers;

use App\Models\budayaku;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BudayakuController extends Controller
{
    function index() {

        $data = [
            'budaya' => budayaku::all()
        ];
        return view('index',$data);
    }

    function search( Request $request) {
        $query =   $request->search;
        $suku = DB::table('budayaku')->where('suku', 'like', "%" . $query . "%")->get();
        return view('viewsearch', ['suku' => $suku]);
    }

    function pulauJawa() {
        $data = [
            'jawa' => DB::table('budayaku')->where('pulau', 'jawa')->get(),
        ];

        return view('pulau.jawa.index',$data);
    }

    function pulauKalimantan() {
        $data = [
            'kalimantan' => DB::table('budayaku')->where('pulau', 'kalimantan')->get(),
        ];

        return view('pulau.kalimantan.index',$data);
    }

    function pulauSumatra() {
        $data = [
            'sumatra' => DB::table('budayaku')->where('pulau', 'sumatra')->get(),
        ];
        return view('pulau.sumatra.index',$data);
    }

    function pulauPapua() {
        $data = [
            'papua' => DB::table('budayaku')->where('pulau', 'papua')->get(),
        ];

        return view('pulau.papua.index',$data);
    }

    function pulauSulawesi() {
        $data = [
            'sulawesi' => DB::table('budayaku')->where('pulau', 'sulawesi')->get(),
        ];

        return view('pulau.sulawesi.index',$data);
    }

    function suku($id_budaya) {
        $query = DB::table('budayaku')->where('id_budaya', $id_budaya)->first();
        $data = [
            'suku' => $query
        ];

        return view('suku',$data);
    }
    
    function pengajuan() {
        
        return view('feedback.pengajuan');
    }

    function about_us()  {
        return view('about_us');
    }
    
}
