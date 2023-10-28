<h1>FESTA {{$res->id}}</h1>
<input id="numero" type="number" placeholder="Insira a quantidade de convidados" value="0">
<p id="inserir"></p>

<form action="{{route('novosconvidados.index', $res->id )}}" method="POST">
    @method('put')
    @csrf()
   <div class="wrapper">
    

    </div>
    <button type="submit"> Enviar</button>
</form>
<script>
    var number= document.getElementById("numero");
    var insere= document.getElementById("inserir");
    var $wrapper=document.querySelector('.wrapper');
    number.addEventListener('input',()=>{
    if (event.currentTarget!=event.originalTarget){
    $wrapper.innerHTML='';
    for(var i=0;i<number.value;i++){
    HTMLTemporario = $wrapper.innerHTML;
    
    HTMLNovo = '<br> <input type="hidden" value="{{$res->id}}" name="id_festa[]"> <input name="CPF[]"> <input name="idade[]"> <input name="nome_convidado[]"> </br>';
    HTMLTemporario = HTMLNovo + HTMLTemporario;
    $wrapper.innerHTML = HTMLTemporario;
    }}});
</script>
