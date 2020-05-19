@extends('adminlte::page')
  

    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
@section('title', 'Dashboard Avaliações')
    
@section('content_header')
    <h1 class="m-0 text-dark">Dashboard de Avaliações</h1>
@stop

@section('content')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<div class="col-lg-6 col-12 divNegativa">
  <div class="small-box bg-danger">
    <div class="inner">
      <h3>44</h3>
      <p>Ruins</p>
    </div>
  </div>
</div>
<div class="col-lg-6 col-12 divPositiva">
  <div class="small-box bg-success">
    <div class="inner">
      <h3>10<sup style="font-size: 20px"> 4★+</sup></h3>
      <p>Ótimas</p>
    </div>
  </div>
</div>

<div id="myfirstchart" style="height: 250px;"></div>  


<script>
    new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2008', value: 5 },
    { year: '2009', value: 3 },
    { year: '2010', value: 2 },
    { year: '2011', value: 4 },
    { year: '2012', value: 3 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});
</script>

@stop