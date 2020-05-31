<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cargo;

class CargosController extends Controller
{
    public function index()
    {
        $cargos = Cargo::whereNull('deleted_at')->get();
        $variables = [
            'cargos' => $cargos
        ];
        return view( 'admin.cargos.index')->with($variables);
    }


    public function create()
    {
        return view('admin.cargos.criar'); 
    }


    public function store(Request $request)
    {
        $cargos = new Cargo();
        $cargos->nome = $request->input('nome');
        $cargos->salario = $request->input('salario');
        $cargos->save();
        return redirect('admin/cargos')->with( 'Cargo criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function show($id)
    {
        //
    }
    */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargos = Cargo::find($id);
        $variables = ['cargos'=>$cargos];
        return view('admin.cargos.editar')->with($variables);
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
        $cargos = Cargo::find($id);
        $cargos->nome = $request->input('nome');
        $cargos->salario = $request->input('salario');
        $cargos->save();
        return redirect('admin/cargos')->with('status', 'Cargo atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cargo::where('id',$id)->delete();
        
        return redirect('admin/cargos')->with('status', 'Cargo excluído com sucesso');
    }
}
