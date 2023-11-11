<h1>Dê sua opinião</h1>
<form action="{{route('novaopiniao.index')}}" method="POST">
    @csrf()

    <input type="hidden" name="nome_aniversariante" value={{$res->nomeaniversariante}}>
    <select name="resultado">
            <option  value="Muito bom"> Muito bom</option>
            <option  value="Bom"> Bom</option>
            <option  value="Regular"> Regular</option>
            <option  value="Ruim"> Ruim</option>
            <option  value="Muito Ruim">Muito Ruim</option>
    </select>
    <textarea name="justifique" rows="5" cols="33" placeholder="justifique"></textarea>
    <button type="submit">Enviar</button>
</form>