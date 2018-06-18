<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use tubuhek\Http\Controllers\Log;
use Illuminate\Support\Facades\Auth;
use App\pengguna;
use App\ek;
use tubuhek\tubuhek;
use DB;


class NewEkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $id = Auth::user()->id;
        
        $pengguna['pengguna'] = DB::table('penggunas')->where('id','=', $id)->first();

        //$pengguna = pengguna::all();
        //dd($pengguna);
        return view('pengguna.index_tubuhek',['pengguna' => $pengguna]);
        


        // $pengguna = pengguna::latest()->paginate(5);
        // return view('pengguna.index',compact('pengguna'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pengguna.create_tubuhek');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

         $name = Auth::user()->name;
         //dd($name);
         $pengguna = [
        'nama_pengguna' => $name,
        'no_pekerja' => $request->no_pekerja,
        'tel_pej' => $request->tel_pej,
        'tel_hp' => $request->tel_hp,
        'emel' => $request->emel,
        'fakulti_id' => $request->fakulti_id,
        'lulusan_id' => $request->lulusan_id,
         ];

    $ek = [
        'nama_ek' => $request->nama_ek,
        
    ];

    $save1 = pengguna::insert($pengguna);
    $save2 = ek::insert($ek);

    if($save1 && $save2)
        return redirect('pengguna.index');
    else
        return redirect()->back()->withInput();
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
    public function destroy($id)
    {
        //
    }
}
