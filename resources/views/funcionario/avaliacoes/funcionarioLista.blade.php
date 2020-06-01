@extends('adminlte::page')

@section('title', 'Funcionários')

@section('content_header')
    <h1 class="m-0 text-dark">Funcionários</h1>
@stop

@section('content')
    <div class="container">
        <div class="box">            
          <div class="table-scrollable">
              <table class="table table-bordered table-hover">
                <thead>
                    <th width="3%">#</th>
                    <th width="35%">Nome</th>
                    <th width="20%">Cargo</th>
                    <th width="20%">Telefone</th>
                    <th width="15%">Avaliar</th>
                </thead>
                <tbody>
                    @foreach ($funcionarios as $func)
                        <tr>
                            <td>{{ $func->id }}</td>
                            <td>{{ $func->name }}</td>
                            <td>{{ $func->cargo }}</td>
                            <td>{{ $func->telefone}}</td>
                            <td>
                                <a href="{{ URL::to('/funcionario/avaliacoes/pagAvaliacao') }}" class="btn btn-sm btn-outline-primary"> Avaliar </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
          </div>
        </div>
    </div>
@stop