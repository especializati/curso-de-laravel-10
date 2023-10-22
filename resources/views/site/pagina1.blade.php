<h1>ANIVERSARIANTE</h1>
<table>
  <thread>
    <th>nome</th>
    <th>senha</th>
    <th>descricao</th>
  </thread>
  <tbody>
        
           <tr>
            <td>{{$forms->nome}}</td>
            <td>{{$forms->senha}}</td>
            <td>{{$forms->body}}</td>
           </tr>
       
  </tbody>
</table>
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
