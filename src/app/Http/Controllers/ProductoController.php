<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index()
    {
        return view('admin.productos.index');
    }

    public function create()
    {
        $marcas = DB::table('marcas')->get();
        $departamentos = DB::table('departamentos')->get();
        return view('admin.productos.create', compact('marcas','departamentos'));
    }

    public function store(Request $request)
    {
        $guardarProducto = DB::table('productos')
            ->insert([
                'sku'            => $request->sku,
                'nombre'         => $request->nombre,
                'precio'         => $request->precio,
                'slug'           => $request->nombre.$request->sku,
                'status'         => 0,
                'marca'          => $request->marca,
                'departamentoId' => $request->departamentoId,
                'categoriaId'    => $request->categoriaId,
                'subCategoriaId' => $request->subCategoriaId,
                'descripcion'    => $request->descripcion,
                'detalles'       => $request->detalles,
            ]);

        if($guardarProducto) {
            if($request->file('imagenes') != null && $request->file('imagenes') != "") {
                foreach($request->file('imagenes') as $imagenProducto) {
                    $tiempo = Carbon::now();
                    $nombreImagen = str_replace(" ","", time());
                    $extension = $imagenProducto->extension();
                    $imagen = $imagenProducto->storeAs('imagenesProducto',$nombreImagen.$tiempo.'.'.$extension);
                    dd($imagenProducto);
                    $url = 'http://localhost/ecommerce/src/storage/app/';
                    $url = $url.$imagen;
                    DB::table('imagenes_productos')
                        ->insert([
                            'idProducto' => $request->sku,
                            'imagenes'   => $url,
                        ]);
                }
            }
        }
    }
}
