<h1>RESERVAS</h1>
<table width="100%" border="1px">
    <thread>
      <th>data</th>
      <th>hora inicial</th>
      <th>hora final</th>
      <th>Titulo do pacote de comidas</th>
      <th>Numero de convidados</th>
      <th>nome do aniversariante</th>
      <th> idade do anivesariante</th>
      <th>situação</th>
    </thread>
    <tbody>
          @foreach($res as $res)
             <tr>
             <td>{{$res->data}}</td>
              <td> {{$res->hora_inicial}} </td>
              <td> {{$res->hora_final}} </td>
              <td>{{$res->titulocomida}} </td>
              <td>{{$res->numeroconvidados}}</td>
              <td>{{$res->nomeaniversariante}}</td>
              <td>{{$res->idadeaniversariante}}</td>
              <td><a href="{{route('convidadosoperacional.index',$res->id)}}">Ver convidados</a></td>
             </tr>
        
          @endforeach
    </tbody>
  </table>