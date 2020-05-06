@extends('adminlte::page')

@section('titulo', 'Cadastrar Promoções.')

@section('content')
    <h1>Cadastrar nova promoção.</h1>

    
    <form action="" method="post">
        <input class="form-control" type="text" name="nome" placeholder="Nome da promoção"> <br>
        <input class="form-control" type="text" name="descricao" placeholder="Descrição da promoção"> <br>
        <input class="form-control" type="text" name="codigo" placeholder="Codigo da promoção"> <br>
        <button class="form-control" type="submit">Cadastrar</button>
    </form>
    
@endsection
    