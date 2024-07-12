@extends('layout')

@section('content')
<main>
    <section class="first__block">
        <img src="{{ asset('img/first-block-img.png') }}" alt="">
        <div class="first__block-wrapper container">
            <h1>Библиотека каталогов</h1>
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
            <li>Библиотека каталогов</li>

        </ul>
    </div>
    <section class="catalog-library container">
        <h2 class="visually-hidden">Список каталогов</h2>
        <div class="catalog-brand__wrapper">
            @foreach ($inner_types as $inner_type)
                <a href="{{ route('catalog-online', ['locale' => app()->getLocale(), 'slug' => $inner_type->slug]) }}" class="catalog-brand__card">
                    <div class="catalog-brand__card-img">
                        <img src="{{ asset('storage/' . $inner_type->image) }}" alt="{{ $inner_type->title }}">
                    </div>
                    <span>{{ $inner_type->title }}</span>
                </a>
            @endforeach
        </div>
    </section>
    <div class="pagination container">
        {{ $inner_types->links('vendor.pagination.custom') }}
    </div>
</main>
@endsection
