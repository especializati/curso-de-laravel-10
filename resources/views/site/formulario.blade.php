<h1>FORMULARIO</h1>
<a href="{{ route('cadastro.index') }}">Cadastrar</a>
<table>
  <thread>
    <th>nome</th>
    <th>senha</th>
    <th>descricao</th>
  </thread>
  <tbody>
        @foreach($formu as $forms)
           <tr>
            <td>{{$forms->nome}}</td>
            <td>{{$forms->senha}}</td>
           </tr>
        @endforeach
  </tbody>
</table>