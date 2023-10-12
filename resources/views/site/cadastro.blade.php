<h1>Novo cadastro</h1>
<form action="{{route('cadastrar.index')}}" method="POST">
    @csrf()
    <input type="text" placeholder="nome" name="nome">
    <input type="password" placeholder="senha" name="senha">
    <textarea name="body" cols="30" rows="5" placeholder="Assunto"></textarea>
    <button type="submit">Cadastrar</button>
</form>
