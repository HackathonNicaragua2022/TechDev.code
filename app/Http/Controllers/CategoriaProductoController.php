<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProducto;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCategoriaProductoRequest;

class CategoriaProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['categoriasProductos']=CategoriaProducto::all();
        return view('categoriaProductos/index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoriaProductos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->except('_token');
        CategoriaProducto::insert($datos);
        return redirect('categorias-productos/')->with('mensaje', 'categoria agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoriaProducto  $categoriaProducto
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaProducto $categoriaProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoriaProducto  $categoriaProducto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = CategoriaProducto::findOrFail($id);
        return view('categoriaProductos/edit', compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Illuminate\Http\Request $request
     * @param  \App\Models\CategoriaProducto  $categoriaProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
        $datos = request()->except(['_token', '_method']);

        CategoriaProducto::where('id', '=', $id)->update($datos);

        $datos = CategoriaProducto::findOrFail($id);
        return view('categoriaProductos.edit', compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriaProducto  $categoriaProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CategoriaProducto:: destroy($id);
        return redirect('categorias-productos/')->with('mensaje', 'Categoria Tienda eliminada con exito');
    }
}
