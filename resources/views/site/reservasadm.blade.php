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
            <td id="aprovar{{$res->id}}" value= "{{$res->status}}">{{$res->status}}</td>
            <td id="negar{{$res->id}}" value= "{{$res->status}}">{{$res->status}}</td>
            <td id="cancelar{{$res->id}}">{{$res->status}}</td>
           </tr>
           <script>
             var element=document.getElementById("aprovar{{$res->id}}");
             var element2=document.getElementById("negar{{$res->id}}");
             var element3=document.getElementById("cancelar{{$res->id}}");
             
             
              if(element.innerText=="pendente"){
                 element.innerHTML='<a href="{{route('aprovar.index',$res->id)}}">aprovar</a>';
                 element2.innerHTML='<a href="{{route('negar.index',$res->id)}}">negar</a>';
                 element3.innerHTML='';
              }
              if(element.innerText=="aprovado"){
                 element.innerHTML='aprovado';
                 element2.innerHTML='';
                 element3.innerHTML='<form action="{{route('cancelaradm.index',$res->id)}}" method="POST">@method('put')@csrf()<input type="hidden" value="cancelarreserva" name="cancelarreserva"><button type="submit"> cancelar</button></form>';
              }
              if(element.innerText=="negado"){
                 element.innerHTML='negado';
                 element2.innerHTML='';
                 element3.innerHTML='';
              }
            </script>
        @endforeach
        <script>

  </tbody>
</table>