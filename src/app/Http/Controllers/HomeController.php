<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\Categoria;
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
        $categorias = DB::table('categorias')->take(10)->get();
        $productos = Producto::select("productos.*", DB::raw("(GROUP_CONCAT(imagenes_productos.imagenes SEPARATOR ',')) as imagenUrl"))
        ->leftjoin("imagenes_productos", "imagenes_productos.idProducto","=","productos.idProducto")
        ->groupBy('productos.idProducto','productos.sku','productos.nombre','productos.precio','productos.slug','productos.marca','productos.descripcion','productos.detalles',
        'productos.status','productos.variedad','productos.departamentoId', 'productos.categoriaId','productos.subCategoriaId','productos.created_at','productos.updated_at')
        ->where('productos.status', 0)
        ->take(8)
        ->get();

        return view('home', compact('banners','marcas','productos','categorias'));
    }

    public function producto()
    {
        return view('producto');
    }

    public function departamento()
    {
        return view('shop');
    }

    public function categoria()
    {
        return view('shop');
    }
    
    public function shop()
    {
        return view('shop');
    }

    public function cart()
    {
        return view('cart');
    }

}
