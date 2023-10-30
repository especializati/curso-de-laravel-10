<h1>EDITAR RECOMENDAÇÃO</h1>

<form action="{{route('atualizarrecomendacao.index',$recomend->id)}}" method="POST">
@method('put')
@csrf()
<textarea name="recomendacoes" rows="5" cols="33"></textarea>
<button type="submit">Enviar</button>
</form>