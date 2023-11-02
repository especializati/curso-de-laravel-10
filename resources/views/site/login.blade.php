<h1>login</h1>
<form action="{{route('fazerlogin.index')}}" method="POST">
    @csrf()
    <input type="text" placeholder="nome" name="nome">
    <input type="password" placeholder="senha" name="senha">
    <button type="submit">Fazer login</button>
</form>
<p>Não possui conta?<a href="{{route('cadastro.index')}}">Cadastrar</p>