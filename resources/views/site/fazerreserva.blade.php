<h1>Data {{$cal->id}}</h1>
<form action="{{route('inserirreserva.index',[$cal->id,$usu->nome] )}}" method="POST">
    @method('put')
    @csrf()  
   <select name="titulocomida">
        @foreach($food as $food)
            <option  name="titulocomida" value={{$food->titulo}}> {{$food->titulo}}</option>
        @endforeach
        <input name="numeroconvidados">
        <input name="nomeaniversariante">
        <input name="idadeaniversariante">
        <input type="hidden" value={{$usu->nome}} name="login">
        <button type="submit">Enviar</button>
   </select>
</form>