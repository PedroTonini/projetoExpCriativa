<form action="{{ route('promo.create') }}">
@csrf
<input type="text" name="nome" placeholder="Nome da promocao">
<input type="text" name="promo" placeholder="Promocao">
<button type="submit">Criar</button>
</form>