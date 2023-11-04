
<table >
    <thread>
      <th>data</th>
      <th>horário de início</th>
      <th>horario de fim</th>
      <th>Pacote de comida</th>
    </thread>
    <tbody>
        
        @foreach($res as $res)
        <tr>
        <td>{{$res->data}}</td>
        <td>{{$res->hora_inicial}}</td>
        <td>{{$res->hora_final}}</td>
        <td>{{$res->titulocomida}}</td>
        </tr>
        @endforeach
        
      
      
    </tbody>
  </table>
  