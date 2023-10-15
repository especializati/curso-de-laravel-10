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

    