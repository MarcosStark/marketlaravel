@extends('site.layouts.basic')

@section('title', 'Contato')

@section('content')
    <section id="form-contact">
        <form>
            <h3>Cadastre-se já!</h3>
            <label>Nome:</label><br>
            <input id="name" name="name" placeholder="Digite seu nome..."><br>
            <label>CPF:</label><br>
            <input id="cpf" name="cpf" placeholder="Digite seu cpf..."><br>
            <label>Telefone:</label><br>
            <input id="telefone" name="telefone" placeholder="Digite seu telefone..."><br>
            <label>Email:</label><br>
            <input id="email" name="email" placeholder="Digite seu email...">
        </form>
    </section>
@endsection