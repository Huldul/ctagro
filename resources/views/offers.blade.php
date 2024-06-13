@extends('layout')

@section('content')
        <main>
            <section class="first__block">
                <img src="{{asset("img/first-block-img.png")}}" alt="">
                <div class="first__block-wrapper container">
                    <h1>Спецпредложения</h1>
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
                    <li>Спецпредложения</li>
                </ul>
            </div>
            <section class="offers container">
                <div class="offers__wrapper">
                    @foreach ($offers as $index => $offer)
                        <div class="offers__container {{ $index % 2 == 1 ? 'reverse' : '' }}">
                            <div class="offers__left">
                                <img src="{{ asset('storage/' . $offer->image1) }}" alt="">
                            </div>
                            <div class="offers__right">
                                <h2>{{ $offer->title }}</h2>
                                <p>{!! $offer->text1 !!}</p>
                                <a href="{{ url(app()->getLocale() . '/offers-inner/' . $offer->slug . '/') }}">Подробнее</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <div class="pagination container">
                {{ $offers->links() }}
            </div>
        </main>
        @endsection
