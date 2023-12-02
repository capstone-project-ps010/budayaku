<?php

namespace App\Http\Controllers;

use App\Models\budayaku;
use Illuminate\Http\Request;
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
            'budaya' => budayaku::all()
        ];
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function store(Request $request) {

        $gambar = $request->gambar . '.' . $request->gambar->extension();
        Storage::putFileAs('public/gambar/gambar', $request->gambar, $gambar);
        $senjata = $request->senjata . '.' . $request->senjata->extension();
        Storage::putFileAs('public/gambar/senjata', $request->senjata, $senjata);
        $rumah_adat = $request->rumah_adat . '.' . $request->rumah_adat->extension();
        Storage::putFileAs('public/gambar/rumah', $request->rumah_adat, $rumah_adat);
        $pakaian_adat = $request->pakaian_adat . '.' . $request->pakaian_adat->extension();
        Storage::putFileAs('public/gambar/pakaian', $request->pakaian_adat, $pakaian_adat);
        $seni = $request->seni . '.' . $request->seni->extension();
        Storage::putFileAs('public/gambar/seni', $request->seni, $seni);
        $data = [
            'pulau' => $request->pulau,
            'suku' => $request->suku,
            'gambar' => $gambar,
            'deskripsi' => $request->deskripsi,
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


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_budaya)
    {
        $budayaku = budayaku::findOrfail($id_budaya);
        $budayaku->delete();
        Storage::delete('public/gambar/' . $budayaku->gambar);

        return redirect()->route('budayaku')->with('mesage','data berhasil di hapus');
    }
}
