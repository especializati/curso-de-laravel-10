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
           <td><a href="{{route('updaterecomendados.index',$recomend->id)}}">Editar</a>
            <td><a href="{{route('deleterecomendados.index',$recomend->id)}}">Delete</a>
           
           </tr>
           
        @endforeach
</tbody>
