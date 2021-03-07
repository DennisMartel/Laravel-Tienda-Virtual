<?php

namespace App\Http\Controllers;

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
}
