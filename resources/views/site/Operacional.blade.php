<h1>OPERACIONAL</h1>
<form action="{{route('reservasoperacional.index')}}" method="POST">
    @csrf()
    <input type="hidden" name="reservas" value="reservas">
    <button type="submit" name="reservas1">Ver convidados da festa</button>
</form>
<form action="{{route('datasoperacional.index')}}" method="POST">
    @csrf()
    <input type="hidden" name="datas" value="datas">
    <button type="submit" name="datas1">Ver próximas reservas</button>
</form>