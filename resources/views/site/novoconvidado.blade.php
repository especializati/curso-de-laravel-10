<h1>FESTA {{$res->id}}</h1>
<form action="{{route('novosconvidados.index', $res->id )}}" method="POST">
    @method('put')
    @csrf()
    <input type="hidden" value="{{$res->id}}" name="id_festa">
    <input name="CPF">
    <input name="idade">
    <input name="nome_convidado">
    <button type="submit"> Enviar</button>
</form>