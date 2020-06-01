@extends('adminlte::page')

@section('title', 'Cadastrar Cargos')

@section('content')
<div class="card">
    <div class="card-body">
        <h1>Cadastrar novo cargo.</h1>

    <br>
    <br>
    <br>
    
    <form action="{{ URL::route('') }}" method="POST">
    {!! csrf_field() !!}
        <div class="col-lg-6 col-12 container">
        
        Insira o nome do cargo:
        <input class="form-control" type="text" name="nome" placeholder="Nome do cargo" required autofocus > <br>
        
        Insira o novo salário do cargo:
        <input class="form-control" type="textarea" name="salario" placeholder="Salário do cargo" required autofocus> <br>
        
        <button class="form-control btn-primary" type="submit">Cadastrar</button>
        </div>
    </form>
    </div>
</div>
    
    
@endsection
    