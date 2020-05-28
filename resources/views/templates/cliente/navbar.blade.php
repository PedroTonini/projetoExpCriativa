<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">    
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
</head>
<nav class="navbar navbar-inverse navbar-fixed-top" id="navbarCliente">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand"> Cliente </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="{{ URL::to('cliente/home') }}"> Compras </a></li>
              <li><a href="{{ URL::to('cliente/promocoes') }}"> Promoções </a></li>
            </ul>                
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ URL::to('index') }}">Sair</a></li>            
            </ul>
          </div>
    </div>
</nav>
</html>