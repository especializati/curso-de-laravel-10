<h1>RECOMENDAÇÕES</h1>
<table>
  <thread>
    <th>recomendações</th>
    
  </thread>
  <tbody>
       
        @foreach($recomend as $recomend)
          
           <tr>
           <td>{{$recomend->recomendacoes}}</td>
           
           </tr>
           
        @endforeach
</tbody>