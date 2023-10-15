<h1>Novo cadastro</h1>
<form action="{{route('cadastrar.index')}}" method="POST">
    @csrf()
    <input type="text" placeholder="nome" name="nome">
    <input type="password" placeholder="senha" name="senha">
    <button type="submit">Cadastrar</button>
</form>
