<h1>Data {{$form->id}}</h1>
<form action="{{route('editaragenda.index', $form->id)}}" method="POST">
    @csrf()  
    @method('put')
    <input type="date" placeholder="data" name="data">
    <input type="time" placeholder="hora" name="hora_inicial">
    <span>até</span>
    <input type="time" name="hora_final">
    <button type="submit">Enviar</button>
</form>