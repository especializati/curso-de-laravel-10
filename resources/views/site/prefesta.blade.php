<h1>FESTA {{$res->id}}</h1>
<br>
<a href="{{route('convidados.index', $res->id )}}">Novo convidado</a>
</br>
<br>
<p>Link para convidados: localhost:8989/festa/convidados/{{$res->id}}</p>
</br>
<br>
<form action="{{route('verconvidados.index', $res->id )}}" method="POST">
    @method('put')
    @csrf()
    <input type="hidden" value="convidado" name="convidado">
    <button type="submit"> ver convidados</button>
</form>
</br>