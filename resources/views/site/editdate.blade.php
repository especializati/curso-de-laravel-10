<h1>Data {{$form->id}}</h1>
<form action="{{route('editaragenda.index', $form->id)}}" method="POST">
    @csrf()  
    @method('put')
    
</form>