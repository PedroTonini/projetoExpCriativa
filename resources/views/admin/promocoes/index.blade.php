@extends('adminlte::page')

@section('title', 'Promoções')

@section('content_header')
    <h1 class="m-0 text-dark">Promoções</h1>
@stop

@section('content')
    <div class="container">
        <div class="box">
            <div>
                <a href="{{ URL::route('promocoes.create') }}" class="btn btn-success">Criar</a>
            </div>
            <br>
            
            <div class="table-scrollable">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th width="5%">#</th>
                        <th width="30%">Nome</th>
                        <th width="10%">Valor</th>
                        <th width="20%">Validade</th>
                        <th width="15%">Código</th>
                        <th width="20%">Ação</th>
                    </thead>
                    <tbody>
                        @foreach ($promocoes as $promocao)
                            <tr>
                                <td>{{ $promocao->id }}</td>
                                <td>{{ $promocao->nome }}</td>
                                <td>R$ {{ number_format($promocao->valor, '2', ',', '.') }}</td>
                                <td>
                                    @if (isset($promocao->validade))
                                        {{ $promocao->validade }}
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{ $promocao->promoCode }}</td>
                                <td>
                                <form action="{{ URL::to('admin/promocoes/'.$promocao->id) }}" method="POST" onsubmit="if (!confirm('Deseja realmente excluir essa promoção? Lembrando que o cliente que tiver essa promoção, ainda poderá utilizá-la.')) return false;">
                                <input type="hidden" name="_method" value="DELETE">
                                    {{ csrf_field() }}
                                <a href="{{ URL::to('admin/promocoes/edit/'.$promocao->id) }}" class="btn btn-sm btn-primary">Editar</a>
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