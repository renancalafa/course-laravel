
<form action={{ route('site.contact') }} method="post">
    @csrf
    <input name="name" type="text" placeholder="Nome" class="{{ $class }}">
    <br>
    <input name="phone" type="text" placeholder="Telefone" class="{{ $class }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{ $class }}">
    <br>
    <select name="reason" class="{{ $class }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="">Dúvida</option>
        <option value="">Elogio</option>
        <option value="">Reclamação</option>
    </select>
    <br>
    <textarea name="message" placeholder="Write your message here" class="{{ $class }}"></textarea>
    <br>
    <button type="submit" class="{{ $class }}">ENVIAR</button>
</form>