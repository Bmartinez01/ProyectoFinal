<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriaCreateRequest;
use App\Http\Requests\CategoriaEditRequest;

class CategoriaController extends Controller
{
    //
    public function index()
    {
        $categorias = Categoria::paginate();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(CategoriaCreateRequest $request)
    {
     /* $request->validate([

           'nombre' => 'required|min:4|max:20|unique:categorias'
         ]); */
    
        
      Categoria::create($request->all());
      return redirect()->route('categorias.index')->with('success', 'Categoria creada correctamente');
    }

    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));

    }
    public function update(CategoriaEditRequest $request,Categoria $categoria)
    {
        $datos = $request->all();
        $categoria->update($datos);
        return redirect()->route('categorias.index')->with('success', 'Categoria actualizada correctamente');

    }
}
