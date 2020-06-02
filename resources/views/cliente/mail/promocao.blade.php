@component('mail::message')
# Obrigado pela sua avaliação!!

Como recompensa entre em nosso site e verifique a aba Promoções para obter o seu código.

@component('mail::button', ['url' => 'Finge que aqui ta a url'])
Acesse Nosso site aqui
@endcomponent

Atenciosamente,<br>
{{ config('app.name') }}
@endcomponent
