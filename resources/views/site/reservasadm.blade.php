
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
            <td id="aprovar" value= "{{$res->status}}"><?php echo(<a href="{{route('aprovar.index',$res->id)}}">aprovar</a>);?></td>
            <td id="negar" value= "{{$res->status}}">{{$res->status}}</td>
           </tr>
           
            <script>
             <?php foreach($res as $res)?>
             var element=document.getElementById("aprovar");
             var element2=document.getElementById("negar");
              if(element.innerText=="pendente"){
                 element.innerHTML='<a href="{{route('aprovar.index',$res->id)}}">aprovar</a>';
                 element2.innerHTML='<a href="{{route('negar.index',$res->id)}}">negar</a>';
              }
              if(element.innerText=="aprovado"){
                 element.innerHTML='aprovado';
              }
              if(element.innerText=="negado"){
                 element.innerHTML='negado';
              }
            
            </script>
        @endforeach
        
  </tbody>
</table>