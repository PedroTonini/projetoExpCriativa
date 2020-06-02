<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Promoções </title>
</head>
@include('templates.cliente.navbar')
<body>
    <div class="container backContainer">
        <div class="box divBoxCliente" align='center'>
            <h1 class="fontIndex" align="center" > Rosa Chock </h1>
            <div class="table-scrollable">
                <table class="table table-bordered table-hover" id="tableCompraCliente">
                    <thead>
                        <th width="10%"> # </th>
                        <th width="30%"> Nome </th>
                        <th width="25%"> Valor </th>
                        <th width="20%"> Validade </th>
                        <th width="15%"> Código </th>
                    </thead>
                    <tbody>
                        @foreach ($promocoes as $promo)
                            <tr>
                                <td>{{ $promo->id }}</td>
                                <td>{{ $promo->nome }}</td>
                                <td>{{ $promo->valor }}</td>
                                <td>
                                    @if ($promo->validade == null)
                                        Sem Validade!
                                    @else
                                        {{ $promo->validade }}
                                    @endif
                                    
                                </td>
                                <td>{{ $promo->promoCode }}</td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>
</html>