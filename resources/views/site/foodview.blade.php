<table>
  <thread>
    <th>TITULO</th>
    <th>fotos</th>
    
  </thread>
  <tbody>
        @foreach($forms as $forms)
           <tr>
            <td>{{$forms->titulo}}</td>
            <td> <img src="{{url("storage/{$forms->Foto1} ")}}" widht=50 height=50 /> </td>
            <td> <img src="{{url("storage/{$forms->Foto2} ")}}" widht=50 height=50 /> </td>
            <td> <img src="{{url("storage/{$forms->Foto3} ")}}" widht=50 height=50 /> </td>
            <td>{{$forms->lista_comidas}}</td>
            <td>{{$forms->lista_bebidas}}</td>
           </tr>
        @endforeach
  </tbody>
</table>
 