@extends('adminlte::page')

@section('title', 'Cadastrar Promoções')

@section('content')
    <h1>Cadastrar nova promoção.</h1>

    <br>
    <br>
    <br>
    
    <form action="{{ URL::route('promocoes.store') }}" method="POST">
    {!! csrf_field() !!}
        <div class="col-lg-6 col-12 container">
        <input class="form-control" type="text" name="nome" placeholder="Nome da promoção" required autofocus > <br>
        <input class="form-control" type="textarea" name="valor" placeholder="Valor da promoção" required autofocus> <br>
        <input class="form-control" type="text" name="codigo" placeholder="Codigo da promoção" required autofocus> <br>
        <button class="form-control btn-primary" type="submit">Cadastrar</button>
        </div>
    </form>
    
@endsection
    