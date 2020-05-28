@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1 class="m-0 text-dark">{{$func->nome}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <a href="{{ URL::to('admin/funcionarios') }}" class="btn btn-dark">Voltar</a>
                <br /><br />
                    <table class="table table-striped">
                        <tr>
                            <td width="25%"><strong>#</strong></td>
                            <td>{{ $func->id }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>Nome completo</strong></td>
                            <td>{{ $func->name }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>CPF:</strong></td>
                            <td>{{ number_format($func->cpf/100, '2', '-', '.') }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>Data de Nascimento</strong></td>
                            <td>{{ date('d/m/Y', strtotime($func->dataNascimento)) }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>E-Mail:</strong></td>
                            <td>{{ $func->email }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>Telefone:</strong></td>
                            <td>{{ $func->telefone }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>Cargo:</strong></td>
                            <td>{{ $func->cargo }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>Salário:</strong></td>
                            <td>{{ 'R$ '.number_format($func->salario, '2', ',', '.') }} / mês</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>Data de Admissão:</strong></td>
                            <td>{{ date('d/m/Y', strtotime($func->dataAdmissao)) }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>Dias de Férias restantes:</strong></td>
                            <td>{{ $func->ferias }}</td>
                        </tr>
                    </table>
                    <a href="{{ $func->id.'/edit' }}" class="btn btn-primary">Editar</a>
                </div>
            </div>
        </div>
    </div>
@stop
