<form action="{{route('novaagenda.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="Agenda" name="Agenda">
    <button type="submit"> Nova Agenda</button>
</form>
<table>
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
            <td><a href="{{route('editdate.index',$forms->id)}}">Editar</a></td>
            <td><a href="{{route('delete.index',$forms->id)}}">Delete</a>
            </td>
           </tr>
        @endforeach
  </tbody>
</table>