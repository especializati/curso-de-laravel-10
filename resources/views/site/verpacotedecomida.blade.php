<table>
    <thread>
      <th>TITULO</th>
      <th>fotos</th>
      
    </thread>
    <tbody>
          
              <?php
              $a=$food->lista_comidas;
              $b=$food->lista_bebidas;?>
             <tr>
              <td>{{$food->titulo}}</td>
              <td> <img src="{{url("storage/{$food->Foto1} ")}}" widht=50 height=50 /> </td>
              <td> <img src="{{url("storage/{$food->Foto2} ")}}" widht=50 height=50 /> </td>
              <td> <img src="{{url("storage/{$food->Foto3} ")}}" widht=50 height=50 /> </td>
              <td><?php echo($a)?></td>
              <td><?php echo ($b)?></td>
              <td>{{$food->preço}}</td>
              <td><form action="{{route('mudarcomida.index', [$res->id,$food->titulo] )}}" method="POST">
                @method('put')
                @csrf()
                <input type="hidden" value="mudarcomida" name="mudarcomida">
                <button type="submit"> Ver pacote de comida escolhido</button>
            </form></td>
              </td>
              </tr>
    </tbody>
  </table>
  