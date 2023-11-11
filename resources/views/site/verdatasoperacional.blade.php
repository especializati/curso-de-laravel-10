
<table id="myTable" width="100%" border="1px">
    <thread>
      <th>data</th>
      <th>horário de início</th>
      <th>horario de fim</th>
      <th>Nome do aniversariante</th>
      <th>Pacote de comida</th>
      
    </thread>
    <tbody>
        
        @foreach($res as $res)
        <tr >
        <td>{{$res->data}}</td>
        <td>{{$res->hora_inicial}}</td>
        <td>{{$res->hora_final}}</td>
        <td>{{$res->nomeaniversariante}}</td>
        <td>{{$res->titulocomida}}</td>
        </tr>
        @endforeach
        
      
    </tbody>
  </table>
  <script>
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("myTable");
        switching = true;
      
        while (switching) {
          
          switching = false;
          rows = table.rows;
        
          for (i = 1; i < (rows.length - 1); i++) {
            
            shouldSwitch = false;
           
            x = rows[i].getElementsByTagName("TD")[0];
            y = rows[i + 1].getElementsByTagName("TD")[0];
            x1= rows[i].getElementsByTagName("TD")[1];
            y1= rows[i+1].getElementsByTagName("TD")[1];
            
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase() ) {
            
              shouldSwitch = true;
              break;
            }
            if( x.innerHTML.toLowerCase() == y.innerHTML.toLowerCase() && x1.innerHTML.toLowerCase() > y1.innerHTML.toLowerCase()){
                shouldSwitch = true;
              break;
            }
          }
          if (shouldSwitch) {
            
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
          }
        }
      
  </script>