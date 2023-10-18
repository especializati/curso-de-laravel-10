<h1>Data {{$cal->id}}</h1>
<form action="{{route('inserirreserva.index',$cal->id )}}" method="POST">
    @csrf()  
   <select name="titulocomida">
        @foreach($food as $food)
            <option value={{$food->titulo}}> {{$food->titulo}}</option>
        @endforeach
        <input name="numeroconvidados">
        <input name="nomeaniversariante">
        <input name="idadeaniversariante">
        <button type="submit">Enviar</button>
   </select>
</form>