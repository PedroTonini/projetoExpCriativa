<div>
<form action="{{route('meta.create')}}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="meta" placeholder="Defina a meta">
    <button type="submit"> Salvar </button>
</form>
</div>