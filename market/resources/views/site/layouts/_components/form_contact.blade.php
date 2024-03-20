{{ $slot }}
<form action={{ route('site.contact') }} method="post" id="form-contact">
    @csrf
    <h3>Cadastre-se já!</h3>
    <label>Nome:</label><br>
    <input id="name" name="name" class="{{ $class }}" placeholder="Digite seu nome..."><br>
    <label>CPF:</label><br>
    <input id="cpf" name="cpf" class="{{ $class }}" placeholder="Digite seu cpf..."><br>
    <label>Telefone:</label><br>
    <input id="telefone" name="telefone" class="{{ $class }}" placeholder="Digite seu telefone..."><br>
    <label>Email:</label><br>
    <input id="email" name="email" class="{{ $class }}" placeholder="Digite seu email..."><br><br>
    <button id="btn-formContact" class="{{ $class }}" type="submit">Enviar</button>
</form>