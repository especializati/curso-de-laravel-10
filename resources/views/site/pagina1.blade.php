<h1>ANIVERSARIANTE</h1>

<form action="{{route('foodaniversariante.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="food" name="food">
    <button type="submit" name="food1">Ver pacotes de comida</button>
</form>
<form action="{{route('calendarioreserva.index',$forms->nome)}}" method="POST">
    @method('put')
    @csrf()
    <input type="hidden" value="reserva" name="reserva">
    <button type="submit" name="reserva">Fazer reserva</button>
</form>
<form action="{{route('verreserva.index',$forms->nome )}}" method="POST">
    @method('put')
    @csrf()  
    <input type="hidden" value="verreserva" name="verreserva">
    <button type="submit" name="verreserva"> Ver reserva</button>
</form>