<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}"> 
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Home </title>
</head>
<body class="backContainer">
    <div class="container" >
        <div class="box" align="center" id="boxIndex">
            <h1 class="fontIndex"> Rosa Chock </h1>
            <br>
            <br>
            <h5> Gostaria de seguir como: </h5>            
            <a class="btn btn-primary btn-lg active" id="btnCliente" href="{{ URL::to('cliente/home') }}"> Cliente </a> {{-- corrigir href--}}
            <a class="btn btn-default btn-lg active" id="btnFuncionario"> Funcionário </a> {{-- need to add href--}}
        </div>
    </div>
    
</body>
</html>