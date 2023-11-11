<h1>OPINIÕES</h1>
<table width="100%" border="1px">
    <thread>
      <th>Nome do Aniversariante</th>
      <th>Resultado da pesquisa        </th>
      <th> Justificativa</th>
      
    </thread>
    <tbody>
          @foreach($op as $op)
             
             <tr>
              <td>{{$op->nome_aniversariante}}</td>
              <td>{{$op->resultado}}</td>
              <td>{{$op->justifique}}</td>
              </tr>
              
          @endforeach
    </tbody>
  </table>