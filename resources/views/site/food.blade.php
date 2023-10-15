<form action="{{route('foodintro.index')}}" method="POST" enctype="multipart/form-data">
    @csrf()
    <input type="file" name="Foto1">
    <input type="file" name="Foto2">
    <input type="file" name="Foto3">
    <input type="text" name="titulo">
    <button type="submit" name="Agenda">Enviar</button>
</form>