@extends('adminlte::page')

@section('title', 'Editar cargos')

@section('content')

<div class="card">
    <div class="card-body">
        <h1>Editar cargo.</h1>

        <br>
        <br>
        <br>
        
        <a href="{{ URL::to('admin/cargos') }}" class="btn btn-primary">Voltar</a>
        <br>
    
        <form action="{{ URL::to('admin/cargos/'.$cargos->id) }}" method="POST">
        {!! csrf_field() !!}
        @if (isset($cargos))
            <input type="hidden" name="_method" value="PUT">
        @endif
            <div class="col-lg-6 col-12 container">
            Insira o novo nome do cargo:
            <input class="form-control" type="text" name="nome" placeholder="Nome do cargo" value="{{$cargos->nome}}"> <br>
    
            Insira o novo salário do cargo:
            <input class="form-control" type="textarea" name="salario" placeholder="Salário do cargo" value="{{$cargos->salario}}"> <br>
            
            <button class="btn btn-md btn-primary" type="submit">Editar</button>
            <a href="{{ URL::to('admin/cargos') }}" class="btn btn-md btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</div>
    
    
@endsection
    