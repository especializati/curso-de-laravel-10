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
</br>
<br>
<form action="{{route('verpacotedecomida.index', $res->id )}}" method="POST">
    @method('put')
    @csrf()
    <input type="hidden" value="pacotedecomida" name="pacotedecomida">
    <button type="submit"> Ver pacote de comida escolhido</button>
</form>
</br>
<form action="{{route('cancelarreserva.index', $res->id )}}" method="POST">
    @method('put')
    @csrf()
    <input type="hidden" value="cancelarreserva" name="cancelarreserva">
    <button type="submit"> Cancelar</button>
</form>
</br>
<br>
<form action="{{route('verrecomendados.index' )}}" method="POST">
    @csrf()
    <input type="hidden" value="recomendados" name="recomendados">
    <button type="submit"> Ver recomendados</button>
</form>
<form action="{{route('opiniao.index',$res->id )}}" method="POST">
    @method('put')
    @csrf()
    <input type="hidden" value="opiniao" name="opiniao">
    <button type="submit"> Dê sua opinião</button>
</form>
</br>