
<table>
  <thread>
    <th>nome</th>
    <th>CPF</th>
    <th>idade</th>
  </thread>
  <tbody>
        @foreach($cos as $cos)
           <tr>
            <td>{{$cos->nome_convidado}}</td>
            <td>{{$cos->CPF}}</td>
            <td>{{$cos->idade}}</td>
            <td><a href="{{route('deleteconvidado.index',[$cos->id,$cos->id_festa])}}">Bloquear</a>
           </tr>
        @endforeach
  </tbody>
</table>