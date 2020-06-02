@extends('adminlte::page')

@section('title', 'Cargos')

@section('content_header')
    <h1 class="m-0 text-dark">Cargos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div>
                <a href="{{ URL::route('cargos.create') }}" class="btn btn-success">Criar</a>
            </div>
            <br>
            
            <div class="table-scrollable">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th width="5%">#</th>
                        <th width="55%">Nome do cargo</th>
                        <th width="20%">Salário</th>
                        <th width="20%">Ação</th>
                    </thead>
                    <tbody>
                        @foreach ($cargos as $cargo)
                            <tr>
                                <td>{{ $cargo->id }}</td>
                                <td>{{ $cargo->nome }}</td>
                                <td>R$ {{ number_format($cargo->salario, '2', ',', '.') }}</td>
                                <td>
                                <form action="{{ URL::to('admin/cargos/'.$cargo->id) }}" method="POST" onsubmit="if (!confirm('Deseja realmente excluir esse cargo?')) return false;">
                                <input type="hidden" name="_method" value="DELETE">
                                    {{ csrf_field() }}
                                <a href="{{ URL::to('admin/cargos/edit/'.$cargo->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                    <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop