<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Compras </title>
</head>
@include('templates.cliente.navbar')
<body>
    <div class="container">
        <div class="box">
            <div class="table-scrollable">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th width="20%">#</th>
                        <th width="30%">Valor</th>
                        <th width="30%">Data</th>  
                        <th width="20%">Status</th>                      
                    </thead>
                    <tbody>
                        @foreach ($compras as $compra)
                            <tr>
                                <td> {{$compra->id}} </td>
                                <td> R${{number_format($compra->valorTotal, '2', ',','.')}} </td>
                                <td> {{$compra->created_at->format('d/m/Y')}} </td>
                                <td>
                                    {{-- @if ({{}})
                                        
                                    @endif --}}
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>
    </div>
    
</body>
</html>