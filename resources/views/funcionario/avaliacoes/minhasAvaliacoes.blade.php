@extends('adminlte::page')
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
@section('title', 'Minhas avaliações')

@section('content_header')
    <h1 class="m-0 text-dark">Minhas Avaliações</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-scrollable">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="10%"> # </th>
                                    <th width="40%"> Data </th>
                                    <th width="50%"> Detalhamento </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($avaliacoes as $ava)
                                    <tr>
                                        <td> {{$ava->id}} </td>
                                        <td> {{$ava->created_at->format('d/m/Y')}} </td>
                                        <td>  <a href="{{ URL::to('funcionario/avaliacoes/detalhamento/'.$ava->id) }}" class="btn btn-sm btn-info"> Detalhes </a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop