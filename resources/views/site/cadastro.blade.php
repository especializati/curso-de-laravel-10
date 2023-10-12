<h1>Novo cadastro</h1>
<form action="{{route('cadastrar.index')}}" method="POST">
    @csrf()
    <input type="text" placeholder="nome" name="nome">
    <input type="password" placeholder="senha" name="senha">
    <input type="text" placeholder="body" name="body">
    <button type="submit">Cadastrar</button>
</form>
