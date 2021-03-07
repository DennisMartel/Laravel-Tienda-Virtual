<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = DB::table('marcas')->get();
        return view('admin.marcas.index', compact('marcas'));
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
    public function store(Request $request)
    {
        $currentTime = Carbon::now()->timestamp;
        $imageName = str_replace(" ","",$request->titulo);
        $imageExtension = $request->file('imagen')->extension();
        $imagen = $request->file('imagen')->storeAs('imagenesMarca',$imageName.$currentTime.'.'.$imageExtension);
        $url = 'http://localhost/ecommerce/src/storage/app/';
        $url = $url.$imagen;

        DB::table('marcas')->insert([
            'imagen' => $url,
            'titulo' => $request->titulo,
            'status' => $request->status,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect('marcas')->with('agregado', 'ok');
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
        $getImage = DB::table('marcas')->where('idMarca', $id)->first();
        $imagen = str_replace('http://localhost/ecommerce/src/storage/app/','',$getImage->imagen);
        Storage::disk('local')->delete('app', $imagen);
        DB::table('marcas')->where('idMarca', $id)->delete();
        return redirect('marcas')->with('eliminar', 'ok');
    }
}
