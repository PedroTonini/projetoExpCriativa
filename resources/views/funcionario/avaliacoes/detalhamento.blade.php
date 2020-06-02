@extends('adminlte::page')

@section('title', 'Detalhes')

@section('content_header')
    <h1 class="m-0 text-dark">Detalhes</h1>
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
                            <td>{{ $ava->id }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>Entrosamento</strong></td>
                            <td>{{ $ava->opiEntrosamento }}</td>
                        </tr>
                        <tr>
                            <td width="25%"><strong>Feedback</strong></td>
                            <td>{{ $ava->opiTexto }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
