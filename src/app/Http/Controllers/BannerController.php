<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = DB::table('banners')->paginate(8);
        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'imagen'    => 'required|mimes:jpg,png,jpeg',
            'titulo'    => 'required',
            'posicion'  => 'required'
        ];
        $messages = [
            'imagen.required'   => 'La imagen es requerida',
            'imagen.mimes'      => 'Formatos validos solo jpg, png, jpeg',
            'titulo.required'   => 'El titulo es requerido',
            'posicion'          => 'Selecciona una posicion para el banner'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect('banner')->withErrors($validator)->withInput();
        } else {
            if($request->imagen != null) {
                $currentTime = Carbon::now()->timestamp;
                $imageName = str_replace(" ","",$request->titulo);
                $imageExtension = $request->file('imagen')->extension();
                $imagen = $request->file('imagen')->storeAs('imagenesBanner',$imageName.$currentTime.'.'.$imageExtension);
                $url = 'http://localhost/ecommerce/src/storage/app/';
                $url = $url.$imagen;

                DB::table('banners')->insert([
                    'imagen'        => $url,
                    'titulo'        => $request->titulo,
                    'posicion'      => $request->posicion,
                    'descripcion'   => $request->descripcion,
                    'url'           => $request->url,
                    'status'        => 0,
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now(),
                ]);
            }
        }        
        return redirect('banner')->with('agregado', 'ok');
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
        $getImage = DB::table('banners')->where('idBanner', $id)->first();
        $imagen = str_replace('http://localhost/ecommerce/src/storage/app/','',$getImage->imagen);
        Storage::disk('local')->delete('app', $imagen);
        DB::table('banners')->where('idBanner', $id)->delete();
        return redirect('banner')->with('eliminar', 'ok');
    }
}
