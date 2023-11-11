<h1>AGENDA DISPONÍVEL</h1>
<table width="100%" border="1px">
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
           </tr>
        @endforeach
  </tbody>
</table>