@extends('site.layouts.basic')

@section('title', 'Home')

@section('content')
    <h1>Mini Mercado Boa Compra</h1>

    <table>
        <tr>
            <td class="main-area">
                <article>
                    <section id="main-img"><img src="{{ asset('img/mini_mercado.jpeg') }}"></section>
                    <p>Mini mercado familiar, que em buscando ser a prefeência da família malhadense e referência em toda a região.</p>
                </article>  
            </td>
            <td class="secundary-area">
                <aside>Texto à direita</aside>
            </td>
        </tr>
    </table>
@endsection

