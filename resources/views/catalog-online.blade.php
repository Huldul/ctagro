@extends('layout')
@section('content')
<main>
<section class="first__block">
        <img src="{{ asset('img/first-block-img.png') }}" alt="">
        <div class="first__block-wrapper container">
            <h1>Онлайн каталог</h1>
        </div>
    </section>
    <div class="_df_book" id="dflip-container" src="/catalog_ctagro.pdf"></div>
</main>

@endsection
