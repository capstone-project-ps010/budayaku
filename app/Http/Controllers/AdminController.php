<?php

namespace App\Http\Controllers;

use App\Models\budayaku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = [
            'data' => budayaku::all()
        ];
        return view('admin.dashboard',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function store(Request $request) {

        $request->validate([
            'gambar'    => 'required|file',
        ]);

        $gambar =$request->gambar . '.' . $request->gambar->extension();
        Storage::putFileAs('public/gambar/suku', $request->gambar, $gambar);
        $gambar_senjata = $request->senjata . '.' . $request->gambar_senjata->extension();
        Storage::putFileAs('public/gambar/senjata', $request->gambar_senjata, $gambar_senjata);
        $gambar_rumah_adat = $request->rumah_adat . '.' . $request->gambar_rumah_adat->extension();
        Storage::putFileAs('public/gambar/rumah', $request->gambar_rumah_adat, $gambar_rumah_adat);
        $gambar_pakaian_adat = $request->pakaian_adat . '.' . $request->gambar_pakaian_adat->extension();
        Storage::putFileAs('public/gambar/pakaian', $request->gambar_pakaian_adat, $gambar_pakaian_adat);
        $gambar_seni = $request->seni . '.' . $request->gambar_seni->extension();
        Storage::putFileAs('public/gambar/seni', $request->gambar_seni, $gambar_seni);
        $data = [
            'pulau' => $request->input('pulau'),
            'suku' => $request->input('suku'),
            'gambar' => $gambar,
            'deskripsi' => $request->input('deskripsi'),
            'senjata'    => $request->input('senjata'),
            'gambar_senjata' => $gambar_senjata,
            'rumah_adat'  => $request->input('rumah_adat'),
            'gambar_rumah_adat' => $gambar_rumah_adat,
            'pakaian_adat'    => $request->input('pakaian_adat'),
            'gambar_pakaian_adat' => $gambar_pakaian_adat,
            'seni' => $request->input('seni'),
            'gambar_seni' => $gambar_seni,
            'bahasa'    => $request->input('bahasa')
        ];

        budayaku::UpdateOrCreate(
            ['id_budaya'   => $request->id],
            $data
        );
        return redirect()->route('budayaku')->with('sucess','berhasl di tambah');
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_budaya)
    {
        $query = DB::table('budayaku')->where('id_budaya', $id_budaya)->first();
        $data = [
            'budaya' => $query
        ];
        return view('admin.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (isset($request->gambar)) {
            $gambar = 'suku-' . $request->gambar . '.' . $request->gambar->extension();
            Storage::putFileAs('public/gambar/suku', $request->gambar, $gambar);
            $senjata = $request->senjata . '.' . $request->senjata->extension();
            Storage::putFileAs('public/gambar/senjata', $request->senjata, $senjata);
            $rumah_adat = $request->rumah_adat . '.' . $request->rumah_adat->extension();
            Storage::putFileAs('public/gambar/rumah', $request->rumah_adat, $rumah_adat);
            $pakaian_adat = $request->pakaian_adat . '.' . $request->pakaian_adat->extension();
            Storage::putFileAs('public/gambar/pakaian', $request->pakaian_adat, $pakaian_adat);
            $seni = $request->seni . '.' . $request->seni->extension();
            Storage::putFileAs('public/gambar/seni', $request->seni, $seni);
            $data = [
                'pulau'         => $request->input('pulau'),
                'suku'          => $request->input('suku'),
                'gambar'        => $gambar,
                'deskripsi'     => $request->input('deskripsi'),
                'senjata'       => $senjata,
                'rumah_adat'    => $rumah_adat,
                'pakaian_adat'  => $pakaian_adat,
                'seni'          => $seni,
                'bahasa'        => $request->input('bahasa')
            ];
            $budaya = budayaku::findOrFail($request->id_budaya);
            $budaya->update($data);
        } else {
            $data = [
                'pulau'         => $request->input('pulau'),
                'suku'          => $request->input('suku'),
                'gambar'        => $request->input('gambar'),
                'deskripsi'     => $request->input('deskripsi'),
                'senjata'       => $request->input('senjata'),
                'rumah_adat'    => $request->input('rumah_adat'),
                'pakaian_adat'  => $request->input('pakaian_adat'),
                'seni'          => $request->input('seni'),
                'bahasa'        => $request->input('bahasa')
            ];
            $budaya = budayaku::findOrFail($request->id_budaya);
            $budaya->update($data);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $budaya = budayaku::findOrfail($id);
        $budaya->delete();
        Storage::delete('public/gambar/suku/' . $budaya->gambar);
        

        return redirect()->route('admin')->with('mesage','data berhasil di hapus');
    }
}
