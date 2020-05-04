<!DOCTYPE html>
<html lang="pt-br">
<head>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Avalie-nos :) </title>
</head>
<body>
    {{-- <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span> --}}

    <div class="container">
        <div class="box" align="center">
            <h2 class="font"> Avalie nosso atendimento: </h2>

            <br>

            <input type="radio" name="opiAtend" class="far fa-star fa-2x radioOption">
            <input type="radio" name="opiAtend" class="far fa-star fa-2x radioOption">
            <input type="radio" name="opiAtend" class="far fa-star fa-2x radioOption">
            <input type="radio" name="opiAtend" class="far fa-star fa-2x radioOption">
            <input type="radio" name="opiAtend" class="far fa-star fa-2x radioOption">

            <br>

            <h2 class="font"> Avalie nossos preços: </h2>

            <br>

            <input type="radio" name="opiPreco" class="fa fa-star fa-2x radioOption">
            <input type="radio" name="opiPreco" class="fa fa-star fa-2x radioOption">
            <input type="radio" name="opiPreco" class="fa fa-star fa-2x radioOption">
            <input type="radio" name="opiPreco" class="fa fa-star fa-2x radioOption">
            <input type="radio" name="opiPreco" class="fa fa-star fa-2x radioOption">

            <br>

            <h2 class="font"> Avalie nossas marcas: </h2>

            <br>

            <input type="radio" name="opiMarca" class="fa fa-star fa-2x radioOption">
            <input type="radio" name="opiMarca" class="fa fa-star fa-2x radioOption">
            <input type="radio" name="opiMarca" class="fa fa-star fa-2x radioOption">
            <input type="radio" name="opiMarca" class="fa fa-star fa-2x radioOption">
            <input type="radio" name="opiMarca" class="fa fa-star fa-2x radioOption">

            <br>

            <h2 class="font"> Avalie nossos produtos: </h2>

            <br>

            <i class="far fa-star fa-2x" data-index="0"></i>
            <i class="far fa-star fa-2x" data-index="1"></i>
            <i class="far fa-star fa-2x" data-index="2"></i>
            <i class="far fa-star fa-2x" data-index="3"></i>
            <i class="far fa-star fa-2x" data-index="4"></i>

            <script src="{{URL::asset('js/jquery-3.5.0.js')}}"></script>
            <script>
                $(document).ready(function(){
                    resetStarColors();

                    $('.fa-star'.mouseover(function(){

                        var currentIndex = parseInt($(this).data('index'));

                        for(var i=0; i <= currentIndex; i++)
                            $('.fa-star:eq('+i+')').css('color', 'orange');
                    }));
                });

                function resetStarColors(){
                    $('.fa-star').css('color', 'black');
                }

            </script>

        </div>
    </div>
    
</body>
</html>