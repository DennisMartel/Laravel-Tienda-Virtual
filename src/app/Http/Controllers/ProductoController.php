<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;

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
            if($request->imagenes != null && $request->imagenes != "") {
                foreach($request->file('imagenes') as $imagen) {
                    $random = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10 / strlen($x)))), 1, 10);
                    $nombreImagen = str_replace(" ","", $request->nombre);
                    $extension = $imagen->extension();
                    $imagen = $imagen->storeAs('imagenesProducto',$nombreImagen.$random.'.'.$extension);
                    $url = 'http://localhost/ecommerce/src/storage/app/';
                    $url = $url.$imagen;
                    DB::table('imagenes_productos')
                        ->insert([
                            'imagenes'   => $url,
                        ]);
                }
            }
        }
    }
}
