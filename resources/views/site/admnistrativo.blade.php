<h1>ADMNISTRATIVO</h1>
<form action="{{route('respostasadmin.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="Agenda" name="NovaAgenda">
    <button type="submit" name="NovaAgenda" value="Agenda">Agenda</button>
</form>
<form action="{{route('respostasadmin1.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="food" name="food">
    <button type="submit" name="food1">CRUD food</button>
</form>
<form action="{{route('respostasadmin2.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="reservas" name="reservas">
    <button type="submit" name="reservas1">Novas reservas</button>
</form>
<form action="{{route('respostasadmin3.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="recomendacoes" name="recomendacoes">
    <button type="submit" name="recomendacoes1">Novas recomendações</button>
</form>
<form action="{{route('respostasadmin4.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="opiniao" name="opiniao">
    <button type="submit" name="opiniao1">Ver opiniões</button>
</form>

    