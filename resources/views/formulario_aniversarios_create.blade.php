<!-- resources/views/reservas/formulario.blade.php -->

<form action="/reservar" method="post">
    @csrf

    <label for="pacote">Pacote:</label>
    <input type="text" name="pacote" required>

    <label for="quantidade_convidados">Quantidade de Convidados:</label>
    <input type="number" name="quantidade_convidados" required>

    <label for="nome_aniversariante">Nome do Aniversariante:</label>
    <input type="text" name="nome_aniversariante" required>

    <label for="idade_comemorada">Idade a ser Comemorada:</label>
    <input type="number" name="idade_comemorada" required>

    <button type="submit">Solicitar Reserva</button>
</form>
