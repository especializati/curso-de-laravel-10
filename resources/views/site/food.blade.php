<form action="{{route('foodintro.index')}}" method="POST" enctype="multipart/form-data">
    @csrf()
    <input type="file" name="Foto1">
    <input type="file" name="Foto2">
    <input type="file" name="Foto3">
    <input type="text" name="titulo" placeholder="Título do pacote">
    <input type="number" name="preço" placeholder="preço do pacote">
    <div id="lista de comidas">
    <p> Insira a lista de comidas</p>
    <textarea id="editor" name="lista_comidas"></textarea>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
    </div>
    <div id="lista de bebidas"> 
    <p> Insira a lista de bebidas</p>
    <textarea id="editor1" name="lista_bebidas" ></textarea>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
    </div>
    
    <button type="submit" name="Agenda">Enviar</button>
</form>