@extends('layout')
@section('content')
<main>
<section class="first__block">
        <img src="{{ asset('img/first-block-img.png') }}" alt="">
        <div class="first__block-wrapper container">
            <h1>Онлайн каталог</h1>
        </div>
    </section>
    <div id="report_1" class="df_container" data-file="/resources/views/catalog_ctagro.pdf"></div>
</main>

@endsection
