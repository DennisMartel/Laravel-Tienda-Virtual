<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\ImagenesProducto;

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
        $producto = new Producto();
        $producto->idProducto = $producto->id;
        $producto->sku            = $request->sku;
        $producto->nombre         = $request->nombre;
        $producto->precio         = $request->precio;
        $producto->slug           = $request->nombre.$request->sku;
        $producto->status         = 0;
        $producto->marca          = $request->marca;
        $producto->departamentoId = $request->departamentoId;
        $producto->categoriaId    = $request->categoriaId;
        $producto->subCategoriaId = $request->subCategoriaId;
        $producto->descripcion    = $request->descripcion;
        $producto->detalles       = $request->detalles;
        if($producto->save()) {
            if($request->imagenes != null && $request->imagenes != "") {
                foreach($request->file('imagenes') as $imagen) {
                    $random = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10 / strlen($x)))), 1, 10);
                    $nombreImagen = str_replace(" ","", $request->nombre);
                    $extension = $imagen->extension();
                    $imagen = $imagen->storeAs('imagenesProducto',$nombreImagen.$random.'.'.$extension);
                    $url = 'http://localhost/ecommerce/src/storage/app/';
                    $url = $url.$imagen;
                    $imagenesProducto = new ImagenesProducto;
                    $imagenesProducto->idProducto = $producto->idProducto;
                    $imagenesProducto->imagenes = $url;
                    $imagenesProducto->save();
                }
            }
        }
    }
}
