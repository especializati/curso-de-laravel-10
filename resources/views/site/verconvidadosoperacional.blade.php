<table>
    <thread>
      <th>nome</th>
      <th>CPF</th>
      <th>idade</th>
    </thread>
    <tbody>
        <script>
            var confirmados=0;
            var presentes=0;
        </script>
        <form action="{{route('novoconvidadooperacional.index', $res->id )}}" method="POST">
            @method('put')
            @csrf()
            <input type="hidden" value="convidado" name="convidado">
            <button type="submit"> novos convidados</button>
        </form>
        <p id="confirmados"></p>
        <p id="presentes"></p>
        <p>Pacote de comidas:{{$res->titulocomida}}</p>
          @foreach($cos as $cos)
          
             <tr>
              <td>{{$cos->nome_convidado}}</td>
              <td>{{$cos->CPF}}</td>
              <td>{{$cos->idade}}</td>
              <td id="presenca{{$cos->id}}">{{$cos->status}}</td>
              
             </tr>
             <script>
                var element=document.getElementById("presenca{{$cos->id}}");
                var element2=document.getElementById("confirmados");
                var element3=document.getElementById("presentes");
              
                confirmados=confirmados+1;
                
                 if(element.innerText=="confirmado"){
                    element.innerHTML='<a href="{{route('aprovarconvidado.index',[$cos->id,$cos->id_festa])}}">Confirmar presença</a>';
                    
                 }
                 if(element.innerText=="presente"){
                    element.innerHTML='presente';
                    presentes=presentes+1;

                 }
                HTMLPRESENTE='presentes:';
                HTMLCONFIRMADO='confirmados:';
                element2.innerHTML=HTMLCONFIRMADO+confirmados;
                element3.innerHTML=HTMLPRESENTE+presentes;
    
               </script>
          @endforeach
    </tbody>
  </table>
 
  
  
  
  
   