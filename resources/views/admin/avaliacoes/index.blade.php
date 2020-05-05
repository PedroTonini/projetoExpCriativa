@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1 class="m-0 text-dark">Avaliações realizadas</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <!-- BEGIN BORDERED TABLE PORTLET-->
                    <div class="table-scrollable">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="60%">Nome completo</th>
                                    <th width="30%">Data</th>
                                    <th width="10%">Detalhamento</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($avaliacoes as $row)
                                    <tr>
                                        <td>{{ $row->nome }}</td>
                                        <td>{{ $row->created_at }}</td>
                                        <td><a href="{{ URL::to('admin/avaliacoes/'.$row->id) }}" class="btn btn-sm btn-info">Detalhes</a></td>
                                    </tr>
                                @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
