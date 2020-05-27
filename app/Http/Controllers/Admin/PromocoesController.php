<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Promocao;

class PromocoesController extends Controller
{
    public function index()
    {
        $promocoes = Promocao::whereNull('deleted_at')->get();
        $variables = [
            'promocoes' => $promocoes
        ];
        return view( 'admin.promocoes.index')->with($variables);
    }


    public function create()
    {
        return view('admin.promocoes.criar'); 
    }


    public function store(Request $request)
    {
        $promocoes = new Promocao();
        $promocoes->nome = $request->input('nome');
        $promocoes->valor = $request->input('valor');
        $promocoes->promoCode = $request->input('codigo');
        $promocoes->save();
        return redirect('admin/promocoes')->with( 'Promoção criada com sucesso');
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
        $promocoes = Promocao::find($id);
        $variables = ['promocoes'=>$promocoes];
        return view('admin.promocoes.editar')->with($variables);
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
        $promocoes = Promocao::find($id);
        $promocoes->nome = $request->input('nome');
        $promocoes->valor = $request->input('descricao');
        $promocoes->promoCode = $request->input('codigo');
        $promocoes->save();
        return redirect('admin/promocoes')->with('status', 'Promoção atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Promocao::where('id',$id)->delete();
        
        return redirect('admin/promocoes')->with('status', 'Promoção excluída com sucesso');
    }
}
