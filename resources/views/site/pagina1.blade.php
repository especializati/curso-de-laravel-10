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
<form action="{{route('foodview.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="food" name="food">
    <button type="submit" name="food1">food</button>
</form>
