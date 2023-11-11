<h1>NOVA RECOMENDAÇÃO</h1>

<form action="{{route('inserirrecomendacao.index')}}" method="POST">
@csrf()
<textarea name="recomendacoes" rows="5" cols="33" placeholder="Insira a recomendação"></textarea>
<button type="submit">Enviar</button>
</form>