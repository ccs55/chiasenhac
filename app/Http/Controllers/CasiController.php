<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Casi;
class CasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $singer = Casi::all();
        return view('admin.singer.list', ['singer' => $singer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.singer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->get('data');
        Casi::create($data);
        return redirect('/admin/singer/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.singer.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Casi::find($id);
        return view('admin.singer.change')->with('data', $data);
        // return view('admin.singer.change',['data'->$data]);
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
        $data = Casi::find($id);
        $data->MaCS=$request->MaCS;
        $data->TenCS=$request->TenCS;
        $data->QueQuan=$request->QueQuan;
        $data->TieuSu=$request->TieuSu;
        $data->NgaySinh=$request->NgaySinh;
        $data->save();
        return redirect('/admin/singer/');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $id = Casi::where('MaCS', $id);
        $id->delete();
        return redirect('/admin/singer/');
    }
}
