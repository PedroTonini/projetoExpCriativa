@extends('adminlte::page')

@section('title', 'Funcionários')

@section('content_header')
    <h1 class="m-0 text-dark">Funcionários</h1>
@stop

@section('content')
    <div class="container">
        <div class="box">
            <br>
          <div>
              <a href="funcionarios/create" class="btn btn-success">Registrar funcionário</a>
          </div>
          <br>
          <div class="table-scrollable">
              <table class="table table-bordered table-hover">
                <thead>
                    <th width="3%">#</th>
                    <th width="35%">Nome</th>
                    <th width="20%">Cargo</th>
                    <th width="15%">Telefone</th>
                    <th width="25%">Ações</th>
                </thead>
                <tbody>
                    @foreach ($funcionarios as $func)
                        <tr>
                            <td>{{ $func->id }}</td>
                            <td>{{ $func->name }}</td>
                            <td>{{ $func->cargo }}</td>
                            <td>{{ $func->telefone}} </td>
                            <td>
                                <a href="{{ $func->id }}" class="btn btn-outline-primary">Detalhes</a>
                                <a href="{{ $func->id }}/edit" class="btn btn-primary">Editar</a>
                                <a href="" class="btn btn-danger">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
          </div>
        </div>
    </div>
@stop