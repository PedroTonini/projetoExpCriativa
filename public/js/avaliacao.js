$(document).ready(function(){

    var opiProduto = -1;
    $('.star-produto').on('click', function() {
        opiProduto = parseInt($(this).data('index'));
        $('#opiProduto').val(parseInt($(this).data('index'))+1);
    });

    $('.star-produto').mouseover(function(){
        var currentIndex = parseInt($(this).data('index'));
        for (var i=0; i <= currentIndex; i++)
            $('.star-produto:eq('+i+')').addClass('fas checked');
    });

    $('.star-produto').mouseleave(function(){
        $('.star-produto').removeClass('fas checked');
        if (opiProduto != -1)
            for (var i = 0; i <= opiProduto; i++)
                $('.star-produto:eq('+i+')').addClass('fas checked');
    });

    var opiMarcas = -1;
    $('.star-marcas').on('click', function() {
        opiMarcas = parseInt($(this).data('index'));
        $('#opiMarcas').val(parseInt($(this).data('index'))+1);
    });

    $('.star-marcas').mouseover(function(){
        var currentIndex = parseInt($(this).data('index'));
        for (var i=0; i <= currentIndex; i++)
            $('.star-marcas:eq('+i+')').addClass('fas checked');
    });

    $('.star-marcas').mouseleave(function(){
        $('.star-marcas').removeClass('fas checked');
        if (opiMarcas != -1)
            for (var i = 0; i <= opiMarcas; i++)
                $('.star-marcas:eq('+i+')').addClass('fas checked');
    });

    var opiPreco = -1;
    $('.star-preco').on('click', function() {
        opiPreco = parseInt($(this).data('index'));
        $('#opiPreco').val(parseInt($(this).data('index'))+1);
    });

    $('.star-preco').mouseover(function(){
        var currentIndex = parseInt($(this).data('index'));
        for (var i=0; i <= currentIndex; i++)
            $('.star-preco:eq('+i+')').addClass('fas checked');
    });

    $('.star-preco').mouseleave(function(){
        $('.star-preco').removeClass('fas checked');
        if (opiPreco != -1)
            for (var i = 0; i <= opiPreco; i++)
                $('.star-preco:eq('+i+')').addClass('fas checked');
    });

    var opiAtendimento = -1;
    $('.star-atendimento').on('click', function() {
        opiAtendimento = parseInt($(this).data('index'));
        $('#opiAtendimento').val(parseInt($(this).data('index'))+1);
    });

    $('.star-atendimento').mouseover(function(){
        var currentIndex = parseInt($(this).data('index'));
        for (var i=0; i <= currentIndex; i++)
            $('.star-atendimento:eq('+i+')').addClass('fas checked');
    });

    $('.star-atendimento').mouseleave(function(){
        $('.star-atendimento').removeClass('fas checked');
        if (opiAtendimento != -1)
            for (var i = 0; i <= opiAtendimento; i++)
                $('.star-atendimento:eq('+i+')').addClass('fas checked');
    });
});

