<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\DosenRequest;
use App\Http\Controllers\Controller;

use App\Models\Dosen;
use App\Models\Agama;
use App\Models\Matkul;

class DosenController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
        $category   = \Request::get('category');

    	$dosens     = Dosen::with('matkul')->whereHas('matkul',function($q) use($category){
            $q->where('id','like','%'.$category.'%');
        })->get();

        $matkuls    = Matkul::lists('nama','id');
       
    	return view('dosen.index')
    			->with('dosens',$dosens)
                ->with('matkuls',$matkuls)
                ->with('idCategory',$category);
                
    }

    public function create()
    {
        $agamas     = Agama::lists('nama','id');
        $matkuls    = Matkul::lists('nama','id');

        return view('dosen.create')
                ->with('agamas',$agamas)
                ->with('matkuls',$matkuls);
    }

    public function store(DosenRequest $request)
    {
        $dosen = new Dosen();

        $dosen->nik         = $request->input('_nik');
        $dosen->nama        = $request->input('_nama');
        $dosen->jenkel      = $request->input('_jenkel');
        $dosen->alamat      = $request->input('_alamat');
        $dosen->id_agama    = $request->input('_agama');
        $dosen->id_matkul   = $request->input('_bidang');

        $dosen->save();

        return redirect()->route('dosen.index');
    }

    public function edit($id)
    {
        $dosen      = Dosen::where('nik','=',$id)->first();
        $agamas     = Agama::lists('nama','id');
        $matkuls    = Matkul::lists('nama','id');

        return view('dosen.edit')
                ->with('dosen',$dosen)
                ->with('agamas',$agamas)
                ->with('matkuls',$matkuls);;
    }

    public function update(DosenRequest $request,$id)
    {
        $dosen = Dosen::where('nik','=',$id)->first();

        $dosen->nik         = $request->input('_nik');
        $dosen->nama        = $request->input('_nama');
        $dosen->jenkel      = $request->input('_jenkel');
        $dosen->alamat      = $request->input('_alamat');
        $dosen->id_agama    = $request->input('_agama');
        $dosen->id_matkul   = $request->input('_bidang');

        $dosen->update();

        return redirect()->route('dosen.index');
    }

    public function destroy($id)
    {
        $dosen = Dosen::where('nik','=',$id)->first();
        $dosen->delete();

        return redirect()->route('dosen.index');
    }
}
