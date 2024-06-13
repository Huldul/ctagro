@extends('layout')

@section('content')
<main>
    <section class="first__block">
        <img src="{{ asset('img/first-block-img.png') }}" alt="">
        <div class="first__block-wrapper container">
            <h1>Пресса о нас</h1>
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
            <li>О компании</li>
            <li>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                </svg>
            </li>
            <li>Пресса о нас</li>
        </ul>
    </div>
    <section class="news reviews container">
        <div class="news__wrapper reviews__wrapper">
            @foreach($meds as $med)
                <div class="news__card reviews__card">
                    <div class="news__img reviews__img">
                        <img src="{{ asset('storage/' . $med->image1) }}" alt="{{ $med->title }}">
                        <span>{{ \Carbon\Carbon::parse($med->published_at)->format('d M. Y') }}</span>
                    </div>
                    <h2>{{ $med->title }}</h2>
                    <a href="{{ url(app()->getLocale() . '/media-inner/' . $med->slug) }}">Подробнее</a>
                </div>
            @endforeach
        </div>
    </section>
    <div class="pagination container">
        {{ $meds->links() }}
    </div>
</main>
@endsection
