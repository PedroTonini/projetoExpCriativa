@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1 class="m-0 text-dark">Avaliação</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                <br /><br />
                    <table class="table table-striped">
                        <tr>
                            <td width="25%"><strong>#</strong></td>
                            <td>{{ $avaliacao->id }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>Nome completo</strong></td>
                            <td>{{ $avaliacao->nome }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>Atendimento</strong></td>
                            <td>{{ $avaliacao->opiAtendimento }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>Preços</strong></td>
                            <td>{{ $avaliacao->opiPreco }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>Marcas</strong></td>
                            <td>{{ $avaliacao->opiMarca }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>Produtos</strong></td>
                            <td>{{ $avaliacao->opiProduto }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>Data da avaliação</strong></td>
                            <td>{{ $avaliacao->created_at }}</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
