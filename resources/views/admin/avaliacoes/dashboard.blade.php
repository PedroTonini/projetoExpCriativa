@extends('adminlte::page')
  

    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
@section('title', 'Dashboard Avaliações')
    
@section('content_header')
    <h1 class="m-0 text-dark">Dashboard de Avaliações</h1>
@stop

@section('content')
 <div class="container">
   <div class="box">
    <div align="center">
      <div class="small-box bg-primary col-6">
        <h3><strong>Overview</strong></h3>
        <h3>{{ number_format($avgAval, '1', '.', ',') }}★</h3>
      </div>
    </div>
    
    
    <div class="row">
      <div class="column">
        <div align="center" id="divAtend">
          <h3><strong>Atendimento</strong> </h3>
          <div class="col-lg-6 col-12 divNegativa">
            <div class="small-box bg-success">
              <div class="inner">
                <h5>Ótimas</h5>
                <h3>{{ $avalAtendBoas }}</h3>
                <h4>(4+★)</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12 divPositiva">
            <div class="small-box bg-danger">
              <div class="inner">
                <h5>Ruins</h5>
                <h3>{{ $avalAtendRuins}}</h3>
                <h4>(2-★)</h4>
              </div>
            </div>
          </div>
        </div>    
      </div>
    
    
      <div class="column">
        <div align="center" id="divProdutos">
          <h3><strong>Produtos</strong></h3>
          <div class="col-lg-6 col-12 divNegativa border-left border-secondary">
            <div class="small-box bg-success">
              <div class="inner">
                <h5>Ótimas</h5>
                <h3>{{ $avalProdBoas }}</h3>
                <h4>(4+★)</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12 divPositiva ">
            <div class="small-box bg-danger">
              <div class="inner">
                <h5>Ruins</h5>
                <h3>{{ $avalProdRuins }}</h3>
                <h4>(2-★)</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="row">
      <div class="column">
        <div align="center" id="divPreco">
          <h3><strong>Preço</strong></h3>
          <div class="col-lg-6 col-12 divNegativa">
            <div class="small-box bg-success">
              <div class="inner">
                <h5>Ótimas</h5>
                <h3>{{ $avalPrecoBoas }}</h3>
                <h4>(4+★)</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12 divPositiva">
            <div class="small-box bg-danger">
              <div class="inner">
                <h5>Ruins</h5>
                <h3>{{ $avalPrecoRuins}}</h3>
                <h4>(2-★)</h4>
              </div>
            </div>
          </div>
        </div>    
      </div>
    
    
      <div class="column">
        <div align="center" id="divMarca">
          <h3><strong>Marcas</strong></h3>
          <div class="col-lg-6 col-12 divNegativa border-left border-secondary">
            <div class="small-box bg-success">
              <div class="inner">
                <h5>Ótimas</h5>
                <h3>{{ $avalMarcasBoas }}</h3>
                <h4>(4+★)</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12 divPositiva ">
            <div class="small-box bg-danger">
              <div class="inner">
                <h5>Ruins</h5>
                <h3>{{ $avalMarcasRuins }}</h3>
                <h4>(2-★)</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
 </div>


@stop