@extends('layout')
@section('content')
<main>
<section class="first__block">
        <img src="{{ asset('img/first-block-img.png') }}" alt="">
        <div class="first__block-wrapper container">
            <h1>Онлайн каталог</h1>
        </div>
    </section>
    @php
        // Декодирование JSON-строки
        $fileData = json_decode($inner_type->file, true);

        // Извлечение значения download_link
        $downloadLink = $fileData[0]['download_link'] ?? null;
    @endphp
    <div id="report_1" class="df_container" data-file="{{ asset("storage/".$downloadLink) }}"></div>
</main>

@endsection
