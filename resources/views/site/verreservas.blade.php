
<table>
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
            <td id="status{{$res->id}}">{{$res->status}}</td>
            <td id="cancelar{{$res->id}}">{{$res->status}}</td>
           </tr>
           <script>
             var element=document.getElementById("status{{$res->id}}");
             var element2=document.getElementById("cancelar{{$res->id}}");
             
             
              if(element.innerText=="pendente"){
                 element.innerHTML='pendente';
                 element2.innerHTML='';
              }
              if(element.innerText=="aprovado"){
                 element.innerHTML='<a href="{{route('prefesta.index', $res->id)}}">Ir para o pre-festa</a>';
                 element2.innerHTML='';

              }
              if(element.innerText=="negado"){
                 element.innerHTML='negado';
                 element2.innerHTML='';
              }
            </script>
        @endforeach
  </tbody>
</table>