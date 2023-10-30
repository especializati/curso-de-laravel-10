<h1>RECOMENDAÇÕES</h1>
<form action="{{route('novarecomendacao.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="recomendacao" name="recomendacao">
    <button type="submit"> Nova Recomendação</button>
</form>
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
