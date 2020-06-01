@extends('adminlte::page')
  

    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
@section('title', 'Dashboard Avaliações')
    
@section('content_header')
    <h1 class="m-0 text-dark">Dashboard de Avaliações</h1>
@stop

@section('content')



<div class="row">
  <div class="column">
    <div align="center" id="divAtend">
      <h3>Atendimento</h3>
      <div class="col-lg-6 col-12 divNegativa">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $avalAtendBoas }} ⮕ 4+★</h3>
            <p>Ótimas</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12 divPositiva">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $avalAtendRuins}} ⮕ 2-★</h3>
            <p>Ruins</p>
          </div>
        </div>
      </div>
    </div>    
  </div>


  <div class="column">
    <div align="center" id="divProdutos">
      <h3>Produtos</h3>
      <div class="col-lg-6 col-12 divNegativa border-left border-secondary">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $avalProdBoas }} ⮕ 4+★</h3>
            <p>Ótimas </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12 divPositiva ">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $avalProdRuins }} ⮕ 2-★</h3>
            <p>Ruins</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="column">
    <div align="center" id="divPreco">
      <h3>Preço</h3>
      <div class="col-lg-6 col-12 divNegativa">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $avalPrecoBoas }} ⮕ 4+★</h3>
            <p>Ótimas</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12 divPositiva">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $avalPrecoRuins}} ⮕ 2-★</h3>
            <p>Ruins</p>
          </div>
        </div>
      </div>
    </div>    
  </div>


  <div class="column">
    <div align="center" id="divMarca">
      <h3>Marcas</h3>
      <div class="col-lg-6 col-12 divNegativa border-left border-secondary">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $avalMarcasBoas }} ⮕ 4+★</h3>
            <p>Ótimas </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12 divPositiva ">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $avalMarcasRuins }} ⮕ 2-★</h3>
            <p>Ruins</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop