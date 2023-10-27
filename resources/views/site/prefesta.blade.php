<h1>FESTA {{$res->id}}</h1>
<form action="{{route('convidados.index', $res->id )}}" method="POST">
    @method('put')
    @csrf()
    <input type="hidden" value="convidados" name="convidados">
    <button type="submit"> convidados</button>
</form>