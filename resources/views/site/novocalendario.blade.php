<h1>INSIRA A NOVA DATA E HORA</h1>
<form action="{{route('inseriragenda.index')}}" method="POST">
    @csrf()  
    <input type="date" placeholder="data" name="data">
    <input type="time" placeholder="hora" name="hora_inicial">
    <span>até</span>
    <input type="time" name="hora_final">
    <button type="submit">Enviar</button>
</form>