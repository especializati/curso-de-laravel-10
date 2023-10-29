<table>
    <thread>
      <th>TITULO</th>
      <th>diferença de preço</th>
      
    </thread>
    <tbody>
          @foreach($data2 as $data2)
              <?php
              $a=$data1->preço;
              $b=$data2->preço;
              $c=$a-$b?>
             <tr>
              <td id="titulo{{$data2->id}}">{{$data2->titulo}}</td>
              <td id="preço{{$data2->id}}" > <?php echo ($c)?></td>
              <td id="link{{$data2->id}}"><a href="{{route('alterarcomida.index',[$data3->id,$data2->titulo] )}}">mudar</a>

             </td>
              </td>
              </tr>
              <script>
                var element=document.getElementById("preço{{$data2->id}}");
                var element2=document.getElementById("titulo{{$data2->id}}");
                var element3=document.getElementById("link{{$data2->id}}");
                 if(element.innerText==0){
                    element.innerHTML='';
                    element2.innerHTML='';
                    element3.innerHTML='';
                 }
                 if(element.innerText<0){
                    element.innerHTML='<?php $d= -$c?> <p><?php echo($d)?> reais a pagar</p>';
                    
                 }
                 if(element.innerText>0){
                    element.innerHTML='<p><?php echo($c)?> reais a receber</p>';
                    
                 }
               </script>
          @endforeach

    </tbody>
</table>
