@extends('adminlte::page')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
@section('title', 'Avaliar')

@section('content_header')
    <h1 class="m-0 text-dark"> Avaliar </h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-scrollable">
                        <form action="" id="formAvaliacaoFunc">

                            @csrf

                            <h4> Qual seu nível de entrosamento? </h4>

                            <br>

                            <input type="hidden" name="opiEntrosamento" id="opiEntrosamento" value="0">
                            <i class="far fa-star fa-2x star-entrosamento" data-index="0"></i>
                            <i class="far fa-star fa-2x star-entrosamento" data-index="1"></i>
                            <i class="far fa-star fa-2x star-entrosamento" data-index="2"></i>
                            <i class="far fa-star fa-2x star-entrosamento" data-index="3"></i>
                            <i class="far fa-star fa-2x star-entrosamento" data-index="4"></i>

                            <br>
                            <br>
                            <br>

                            <h4> Avalie-o: </h4>                           

                            <textarea name="" id="" cols="60" rows="8" placeholder="&ensp;Feedback para seu colega de trabalho"></textarea>                       

                            <script src="{{ URL::asset('js/jquery-3.5.0.js') }}"></script>
                            <script src="{{ URL::asset('js/avaliacaoFuncionario.js') }}"></script>

                        </form>
                        <button type="button" class="btn btn-primary" id="btEnviarFunc"> Enviar avaliação </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop