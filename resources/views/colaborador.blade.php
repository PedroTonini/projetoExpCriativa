<form action="{{ route('colaborador.create') }}">
@csrf
<input type="text" name="nome" placeholder="Nome do colaborador">
<button type="submit">Cadastrar</button>
</form>