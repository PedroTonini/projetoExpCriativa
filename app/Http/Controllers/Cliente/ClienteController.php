<?php

namespace App\Http\Controllers\Cliente;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\User;
use App\Models\AvaliacaoDeCompra;
use App\Models\Promocao;
use App\Models\ClientePromocao;
use App\Mail\PromocaoMail;
use Carbon\Carbon;


class ClienteController extends Controller
{
    public function auth() {
        if ( null !== Auth::user() && !Auth::user()->hasRole('cliente') ) {
            Auth::logout();
        }
        return redirect('/cliente/home');
    }

    public function home(){
        $compras = Compra::getComprasCliente()->orderBy('id', 'DESC')->get();
        $variables = [
            'compras' => $compras
        ];
        return view( 'cliente.home')->with($variables);
    }

    public function promocoes(){
        $userId = Auth::id();
        $promocoes_id = ClientePromocao::where('user_id', $userId)->orderBy('created_at', 'DESC')->get('promocao_id');
        $promocoes = [];
        $currDate = Carbon::now()->format('Y-m-d H:i:s');
        foreach ($promocoes_id as $promo_id) {
            $promo = Promocao::where('id', $promo_id->promocao_id)->first();       
            if ($promo->validade == null || $promo->where('validade', '>=', $currDate)){
                array_push($promocoes, $promo);
            } 
        }

        $variables = [
            'promocoes'     => $promocoes
        ];
        return view('cliente.promocoes')->with($variables);
    }

    public function index(){
        return view('index');
    }

    public function cadastro() {
        return view('cliente.cadastrar');
    }

    public function store(Request $request) {
         // Procura se cadastro de usuário já existe
         $user = User::withTrashed()->where('cpf', $request->cpf)->first();

         // Criando registro de usuário
        $novoUser = new User();
        if($user != null) {
           $novoUser = $user;
           $novoUser->deleted_at = null;
        }

        $novoUser->name = $request->name;
        $novoUser->email = $request->email;
        $novoUser->password = bcrypt($request->password);
        $novoUser->cpf = $request->cpf;
        $novoUser->dataNascimento = $request->dataNascimento;
        $novoUser->telefone = $request->telefone;
        $novoUser->save();
        $user = User::where('cpf', '=', $novoUser->cpf)->first();
        $user->attachRole(3);

        return redirect('cliente/home');
    }

    public function avaliar(){
        return view('cliente.avaliar');
    }

    public function salvarAvaliacao($id) {
        $userId = Auth::id();

        // salvar avaliacao
        $aval = new AvaliacaoDeCompra();
        $aval->opiAtendimento = request('opiAtendimento');
        $aval->opiPreco = request('opiPreco');
        $aval->opiMarca = request('opiMarca');
        $aval->opiProduto = request('opiProduto');
        $aval->compra_id = $id;
        $aval->user_id = $userId;
        // $aval->save();

        // dar promoçao ao cliente
        $promo = Promocao::inRandomOrder()->first()->id;
        $relacionamento = new ClientePromocao();
        $relacionamento->user_id = $userId;
        $relacionamento->promocao_id = $promo;
        // $relacionamento->save();

        // Mandar email para o clinte alertando que recebeu a promocao
        $userEmail = Auth::user()->email;

        Mail::to($userEmail)->send(new PromocaoMail());
        return redirect('cliente/promocoes');
    }
}
