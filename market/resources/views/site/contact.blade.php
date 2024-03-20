@extends('site.layouts.basic')

@section('title', 'Contato')

@section('content')
    <section>
        @component('site.layouts._components.form_contact', ['class' => 'border-colorful'] )
            <h6>Após cadastrar-se você terá acesso ao nosso carrinho de compras e aos nossos produtos.CT</h6>
        @endcomponent
    </section>
@endsection