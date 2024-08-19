@extends('layout')
@section('content')
<main>

<section class="first__block">
        <img src="{{ asset('img/first-block-img.png') }}" alt="">
        <div class="first__block-wrapper container">
            <h1>Онлайн каталог</h1>
        </div>
    </section>
    <div class="breadcrumbs container">
        <ul>
            <li>
                <a href="/">Главная</a>
            </li>
            <li>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                </svg>
            </li>
            <li><a href="{{ route('library_online', ['locale' => app()->getLocale()]) }}">@trans('catalog_library')</a></li>
            <li>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                </svg>
            </li>
            <li>{{ $inner_type->title }}</li>
        </ul>
    </div>
    @php
        // Декодирование JSON-строки
        $fileData = json_decode($inner_type->file, true);

        // Извлечение значения download_link
        $downloadLink = $fileData[0]['download_link'] ?? null;
    @endphp
    <div id="report_1" class="df_container" data-file="{{ asset("storage/".$downloadLink) }}"></div>
</main>

@endsection
