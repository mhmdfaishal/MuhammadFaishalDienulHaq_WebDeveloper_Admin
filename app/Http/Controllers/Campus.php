<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ModelKampus;
class Campus extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function alldata()
    {
        $campus = DB::table('datakampus') -> get();
        return view('indexcrud', ['datakampus' => $campus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function comparecampus(Request $request)
    {
        $kampus1= DB::table('datakampus')->where('akronim_kampus',$request->campus1)->get();
        $kampus2= DB::table('datakampus')->where('akronim_kampus',$request->campus2)->get();
        return view('comparecampus',['kampus1' => $kampus1,'kampus2' => $kampus2]);
    }
    public function create()
    {
        return view('add_data');
    }
    public function save(Request $request)
    {
        $this->validate($request, [
			'foto' => 'required|mimes:jpeg,png,jpg|max:2048',
			'akronim_kampus' => 'required',
			'nama_kampus' => 'required',
			'alamat_kampus' => 'required',
			'akreditasi' => 'required',
			'status' => 'required',
			'peringkat_asia' => 'required',
			'peringkat_lokal' => 'required',
        ]);
        $datakampus = new ModelKampus();
        $foto = $request->file('foto');
        $namafile = $foto->getClientOriginalName();
        $datakampus->foto = $request->$namafile;
        $datakampus->akronim_kampus = $request->akronim_kampus;
        $datakampus->nama_kampus = $request->nama_kampus;
        $datakampus->alamat_kampus = $request->alamat_kampus;
        $datakampus->akreditasi = $request->akreditasi;
        $datakampus->status = $request->status;
        $datakampus->peringkat_asia = $request->peringkat_asia;
        $datakampus->peringkat_lokal = $request->peringkat_lokal;
        $datakampus->save();
     
        $folderlogo = 'assets/img';
        $foto->move($folderlogo,$foto->getClientOriginalName());

        return redirect('/alldata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        $kampus = DB::table('datakampus')->where('akronim_kampus',$id)->get();
        return view('edit',['kampus' => $kampus]);
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

        DB::table('datakampus')->where('akronim_kampus',$request->akronim_kampus)->update([
            'alamat_kampus' => $request->alamat_kampus,
            'akreditasi' => $request->akreditasi,
            'peringkat_asia' => $request->peringkat_asia,
            'peringkat_lokal' => $request->peringkat_lokal
        ]);
        return redirect('/alldata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        
        DB::table('datakampus')->where('akronim_kampus',$id)->delete();
        return redirect('/alldata');
    }
}
