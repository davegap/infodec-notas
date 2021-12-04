<?php

namespace infodec\Http\Controllers;

use Illuminate\Http\Request;
use infodec\Nota;

class NotasController extends Controller
{
    // index para monstrar
    // store para guardar
    // update para actualizar
    // destroy para Eliminar
    // edit para editar

    public function index()
    {
        $notas=Nota::all();
       return view("contenido.index",compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("contenido.formulario");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres'=> 'required|alpha',
            'nota1'=>'numeric|required |min:1.0|max:5.0',
            'nota2'=>'numeric|required |min:1.0|max:5.0',
            'nota3'=>'numeric|required |min:1.0|max:5.0',
        ]);

        $nota =new Nota;
        $nota->nombres=$request->nombres;
        $nota->nota1=$request->nota1;
        $nota->nota2=$request->nota2;
        $nota->nota3=$request->nota3;
        $nota->promedio=round(($request->nota1+$request->nota2+$request->nota3)/3, 1, PHP_ROUND_HALF_UP);
        $nota->save();

        return back()->with('success','Notas grabadas de forma correcta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $notaEditar=Nota::where('id', $id)->get();
        return view('contenido.editar',compact('notaEditar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres'=> 'required|alpha',
            'nota1'=>'numeric|required |min:1.0|max:5.0',
            'nota2'=>'numeric|required |min:1.0|max:5.0',
            'nota3'=>'numeric|required |min:1.0|max:5.0',
        ]);

        $nota=Nota::findOrFail($id);
        $nota->nombres=$request->nombres;
        $nota->nota1=$request->nota1;
        $nota->nota2=$request->nota2;
        $nota->nota3=$request->nota3;
        $nota->promedio=round(($request->nota1+$request->nota2+$request->nota3)/3, 1, PHP_ROUND_HALF_UP);
        $nota->save();
        return back()->with('update','registro actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notaEditar=Nota::where('id', $id)->delete();
        return back()->with('delete','registro eliminado correctamente');
    }
}
