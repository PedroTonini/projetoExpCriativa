@extends('adminlte::page')

@section('title', 'Registrar funcionário')

<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

@section('content_header')
    <h1 class="m-0 text-dark">Registrar funcionário</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ url()->previous() }}" class="btn btn-dark">Voltar</a>
            <div class="margin-left margin-top">
                <form action="{{ URL::to('admin/funcionarios') }}" method="POST">
                    @csrf
                    <table>
                        <tr>
                            <td>Nome:</td>
                            <td>Data de nascimento:</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" name="nome" placeholder="e.g. Marco Aurélio Silva" required autofocus>
                            </td>
                            <td>
                                <input type="date" class="form-control" name="dataNascimento" required autofocus>
                            </td>
                        </tr>
                        <tr>
                            <td>Telefone:</td>
                            <td>CPF:</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="telefone" placeholder="e.g. (41) 98484-4848" required autofocus></td>
                            <td><input type="text" class="form-control" name="cpf" placeholder="e.g. 145.541.415-15" required autofocus></td>
                        </tr>
                        <tr>
                            <td>E-Mail:</td>
                            <td>Senha:</td>
                        </tr>
                        <tr>
                            <td><input type="email" class="form-control" name="email" required autofocus></td>
                            <td><input type="password" class="form-control" name="password" required autofocus></td>
                        </tr>
                        <tr align="center">
                            <td colspan="2" class="margin-top"> Cargo:</td>
                        </tr>
                        <tr>
                            <td colspan="2"><select class="form-control" name="cargo" required autofocus>
                                    @foreach ($cargos as $cargo)
                                        <option value="{{ $cargo->id }}">{{ $cargo->id.' - '.$cargo->nome }}</option>
                                    @endforeach  
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><br><button type="submit" class="btn btn-success form-control">Registrar</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@stop