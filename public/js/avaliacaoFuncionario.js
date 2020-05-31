$(document).ready(function(){
    var opiEntrosamento = -1;
    $('.star-entrosamento').on('click', function() {
        opiEntrosamento = parseInt($(this).data('index'));
        $('#opiEntrosamento').val(parseInt($(this).data('index'))+1);
    });

    $('.star-entrosamento').mouseover(function(){
        var currentIndex = parseInt($(this).data('index'));
        for (var i=0; i <= currentIndex; i++)
            $('.star-entrosamento:eq('+i+')').addClass('fas checked');
    });

    $('.star-entrosamento').mouseleave(function(){
        $('.star-entrosamento').removeClass('fas checked');
        if (opiEntrosamento != -1)
            for (var i = 0; i <= opiEntrosamento; i++)
                $('.star-entrosamento:eq('+i+')').addClass('fas checked');
    });

    $('#btEnviarFunc').on('click', function(){
        var erro = false;
        $('input').each(function(){
            if (parseInt($(this).val()) == 0)
                erro = true;
        });
        if (erro == true)
            alert('ERRO! Por favor, nota mínima aceitável é uma estrela!');
        
        else
            var form = document.getElementById('formAvaliacaoFunc');
            form.submit();

    });
})