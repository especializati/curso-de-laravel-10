<h1>ADMNISTRATIVO</h1>
<form action="{{route('respostasadmin.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="Agenda" name="NovaAgenda">
    <button type="submit" name="Agenda">Nova Agenda</button>
</form>
  
    