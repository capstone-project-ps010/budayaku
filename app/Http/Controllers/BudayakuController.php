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

        return view('pulau.kalimantan',$data);
    }

    function pulauSumatra() {
        $data = [
            'sumatra' => DB::table('budayaku')->where('pulau', 'sumatra')->get(),
        ];
        return view('pulau.sumatra',$data);
    }

    function pulauPapua() {
        $data = [
            'papua' => DB::table('budayaku')->where('pulau', 'papua')->get(),
        ];

        return view('pulau.papua',$data);
    }

    function pulauSulawesi() {
        $data = [
            'sulawesi' => DB::table('budayaku')->where('pulau', 'sulawesi')->get(),
        ];

        return view('pulau.',$data);
    }

    function store(Request $request) {

        $suku = $request->suku . '.' . $request->suku->extension();
        Storage::putFileAs('public/suku', $request->suku, $suku);
        $senjata = $request->senjata . '.' . $request->senjata->extension();
        Storage::putFileAs('public/senjata', $request->senjata, $senjata);
        $rumah_adat = $request->rumah_adat . '.' . $request->rumah_adat->extension();
        Storage::putFileAs('public/rumah_adat', $request->rumah_adat, $rumah_adat);
        $pakaian_adat = $request->pakaian_adat . '.' . $request->pakaian_adat->extension();
        Storage::putFileAs('public/pakaian_adat', $request->pakaian_adat, $pakaian_adat);
        $seni = $request->seni . '.' . $request->seni->extension();
        Storage::putFileAs('public/seni', $request->seni, $seni);
        $data = [
            'pulau' => $request->pulau,
            'suku' => $suku,
            'senjata'    => $senjata,
            'rumah_adat'  => $rumah_adat,
            'pakaian_adat'    => $pakaian_adat,
            'seni'     => $seni,
            'bahasa'    => $request->input('bahasa')
        ];

        budayaku::UpdateOrCreate(
            ['id_budaya'   => $request->id],
            $data
        );
        return redirect()->route('budayaku')->with('sucess','berhasl di tambah');
        
    }

    public function destroy($id)
    {
        $budayaku = budayaku::findOrfail($id);
        $budayaku->delete();
        // Storage::delete('public/gambar/' . $budayaku->gambar);

        return redirect()->route('budayaku')->with('mesage','data berhasil di hapus');
    }
}
