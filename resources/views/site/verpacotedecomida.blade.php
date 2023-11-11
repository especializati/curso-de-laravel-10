<h1>PACOTES DE COMIDA</h1>
<table width=200 height=100 border="1px">
    <thread>
    <th>TITULO</th>
    <th>Foto1</th>
    <th>Foto2</th>
    <th>Foto3</th>
    <th>Preço</th>
    <th>Lista de comidas</th>
    <th>Lista de bebidas</th>
    
      
    </thread>
    <tbody>
          
              <?php
              $a=$food->lista_comidas;
              $b=$food->lista_bebidas;?>
             <tr>
              <td>{{$food->titulo}}</td>
              <td> <img src="{{url("storage/{$food->Foto1} ")}}" widht=200 height=100 /> </td>
              <td> <img src="{{url("storage/{$food->Foto2} ")}}" widht=200 height=100 /> </td>
              <td> <img src="{{url("storage/{$food->Foto3} ")}}" widht=200 height=100 /> </td>
              <td>{{$food->preço}}</td>
              <td><?php echo($a)?></td>
              <td><?php echo ($b)?></td>
              
              <td><form action="{{route('mudarcomida.index', [$res->id,$food->titulo] )}}" method="POST">
                @method('put')
                @csrf()
                <input type="hidden" value="mudarcomida" name="mudarcomida">
                <button type="submit"> Mudar pacote de comida</button>
            </form></td>
              </td>
              </tr>
    </tbody>
  </table>
  