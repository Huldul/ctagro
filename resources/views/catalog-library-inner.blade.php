@extends('layout')

@section('content')
<main>
    <section class="first__block">
        <img src="{{ asset('img/first-block-img.png') }}" alt="">
        <div class="first__block-wrapper container">
            <h1>{{ $brand->title }}</h1>
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
            <li><a href="{{ route('catalog', ['locale' => app()->getLocale()]) }}">Каталог</a></li>
            <li>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                </svg>
            </li>
            <li><a href="{{ route('catalog-library', ['locale' => app()->getLocale()]) }}">Библиотека каталогов</a></li>
            <li>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                </svg>
            </li>
            <li>{{ $brand->title }}</li>
        </ul>
    </div>
    <section class="catalog-library container">
        <h2 class="visually-hidden">Список каталогов</h2>
        <div class="catalog-library__wrapper catalog-library-inner__wrapper">
            @foreach ($products as $product)
                <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product->slug]) }}" class="catalog-library-inner__card">
                    <div class="catalog-library-inner__card-img">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}">
                    </div>
                    <span>{{ $product->title }}</span>
                </a>
            @endforeach
        </div>
    </section>
    <div class="pagination container">
        {{ $products->links('vendor.pagination.custom') }}
    </div>
</main>
@endsection
