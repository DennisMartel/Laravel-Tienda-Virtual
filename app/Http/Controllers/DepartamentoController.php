<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deps = DB::table('departamentos')->paginate(8);
        return view('admin.departamentos.index', compact('deps'));
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
        $imageName = $request->titulo;
        $imageExtension = $request->file('imagen')->extension();
        $imagen = $request->file('imagen')->storeAs('departamentoImagenes',$imageName.$currentTime.'.'.$imageExtension);
        $url = 'http://localhost/ecommerce/storage/app/';
        $url = $url.$imagen;

        DB::table('departamentos')->insert([
            'imagen' => $url,
            'titulo' => $request->titulo,
            'status' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect('departamentos')->with('Mensaje', 'Departamento agregado con exito');
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
        $getImage = DB::table('departamentos')->where('idDepartamento', $id)->first();
        $imagen = str_replace('http://localhost/ecommerce/storage/app/','',$getImage->imagen);
        Storage::disk('local')->delete('app', $imagen);
        DB::table('departamentos')->where('idDepartamento', $id)->delete();
        return redirect('departamentos')->with('Mensaje', 'Departamento eliminado exitosamente');
    }
}
