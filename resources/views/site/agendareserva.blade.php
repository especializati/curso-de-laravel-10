<table>
  <thread>
    <th>Data</th>
    <th>Hora de início</th>
    <th>Hora de término</th>
  </thread>
  <tbody>
        @foreach($forms as $forms)
           <tr>
            <td>{{$forms->data}}</td>
            <td>{{$forms->hora_inicial}}</td>
            <td>{{$forms->hora_final}}</td>
            <td><a href="{{route('fazerreserva.index', [$forms->id,$usu->nome] )}}">Escolher data</a></td>
           </tr>
        @endforeach
  </tbody>
</table>