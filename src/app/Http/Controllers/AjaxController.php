<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function seleccionarCategoria(Request $request, $id)
    {
        $categorias = DB::table('categorias')->where('idDepartamento', $id)->get();
        return response()->json(['data' => $categorias]);
    }

    public function seleccionarSubCategoria(Request $request, $id)
    {
        $subcategorias = DB::table('sub_categorias')->where('idCategoria', $id)->get();
        return response()->json(['data' => $subcategorias]);
    }
}
