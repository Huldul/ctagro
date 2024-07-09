@extends('layout')
@section('content')
<main>
<section class="first__block">
        <img src="{{ asset('img/first-block-img.png') }}" alt="">
        <div class="first__block-wrapper container">
            <h1>Онлайн каталог</h1>
        </div>
    </section>
    <div class="flipbook" id="flipbook"></div>
</main>

@endsection
