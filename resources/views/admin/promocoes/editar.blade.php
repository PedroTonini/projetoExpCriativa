@extends('adminlte::page')

@section('title', 'Editar promoção')

@section('content')
<div class="card">
    <div class="card-body">
        <h1>Editar promoção.</h1>

        <br>
        <br>
        <br>
        
        <a href="{{ URL::to('admin/promocoes') }}" class="btn btn-primary">Voltar</a>
        <br>
    
        <form action="{{ URL::to('admin/promocoes/'.$promocoes->id) }}" method="POST">
        {!! csrf_field() !!}
        @if (isset($promocoes))
            <input type="hidden" name="_method" value="PUT">
        @endif
            <div class="col-lg-6 col-12 container">
            Insira o novo nome da promoção:
            <input class="form-control" type="text" name="nome" placeholder="Nome da promoção" value="{{$promocoes->nome}}"> <br>
    
            Insira a nova descrição/valor da promoção:
            <input class="form-control" type="textarea" name="descricao" placeholder="Descrição da promoção" value="{{$promocoes->valor}}"> <br>
            
            Insira o novo código da promoção:
            <input class="form-control" type="text" name="codigo" placeholder="Codigo da promoção" value="{{$promocoes->promoCode}}"> <br>
    
            <button class="btn btn-md btn-primary" type="submit">Editar</button>
            <a href="{{ URL::to('admin/promocoes') }}" class="btn btn-md btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</div>
   
    
@endsection
    