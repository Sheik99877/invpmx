<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class categoriaController extends Controller
{
    public function index()
    {
    	$categorias = Categoria::all();
      //dd($categorias);
    	return view('categorias.index', compact('categorias'));
    }
}
