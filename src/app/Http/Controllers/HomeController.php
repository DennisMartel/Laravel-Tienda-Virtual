<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners = Banner::all();
        $marcas = Marca::all();

        $productos = DB::table('productos')
        ->select("productos.*", DB::raw("(GROUP_CONCAT(imagenes_productos.imagenes SEPARATOR ',')) as imagenUrl"))
        ->leftjoin("imagenes_productos", "imagenes_productos.idProducto","=","productos.idProducto")
        ->groupBy('productos.idProducto','productos.sku','productos.nombre','productos.precio','productos.slug','productos.marca','productos.descripcion','productos.detalles',
        'productos.status','productos.departamentoId', 'productos.categoriaId','productos.subCategoriaId','productos.created_at','productos.updated_at')
        ->where('productos.status', 0)
        ->take(8)
        ->get();

        return view('home', compact('banners','marcas','productos'));
    }

    public function shop()
    {
        return view('shop');
    }

    public function cart()
    {
        return view('cart');
    }

    public function departamento()
    {
        return view('shop');
    }
}
