<h1>Data {{$form->id}}</h1>
<form action="{{route('editarfood.index', $form->id)}}" method="POST" enctype="multipart/form-data">
    @csrf()  
    @method('put')
    <input type="file" name="Foto1">
    <input type="file" name="Foto2">
    <input type="file" name="Foto3">
    <input type="text" name="titulo">
    <textarea id="editor" name="lista_comidas"></textarea>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
    <textarea id="editor1" name="lista_bebidas" ></textarea>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
    
    <button type="submit" name="Agenda">Enviar</button>
</form>