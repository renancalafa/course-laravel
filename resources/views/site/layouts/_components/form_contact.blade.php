
<form action={{ route('site.contact') }} method="post">
    @csrf
    <input name="name" type="text" placeholder="Nome" class="borda-branca">
    <br>
    <input name="phone" type="text" placeholder="Telefone" class="borda-branca">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="borda-branca">
    <br>
    <select name="reason" class="borda-branca">
        <option value="">Qual o motivo do contato?</option>
        <option value="">Dúvida</option>
        <option value="">Elogio</option>
        <option value="">Reclamação</option>
    </select>
    <br>
    <textarea name="message" class="borda-branca">Preencha aqui a sua mensagemm</textarea>
    <br>
    <button type="submit" class="borda-branca">ENVIAR</button>
</form>