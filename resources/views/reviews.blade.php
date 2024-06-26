@extends('layout')

@section('content')
        <main>
            <section class="first__block">
                <img src="{{asset("img/first-block-img.png")}}" alt="">
                <div class="first__block-wrapper container">
                    <h1>Отзывы</h1>
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
                    <li>Отзывы</li>
                </ul>
            </div>
            <section class="reviews container">
                <div class="reviews__wrapper">

                    @foreach ($reviews as $review)
                        <div class="reviews__card">
                            <div class="reviews__img">
                                <img src="{{asset("storage/".$review->image)}}" alt="">
                            </div>
                            <h2>{{$review->title}}</h2>
                            <a href="{{ route('reviews-inner', ['locale' => app()->getLocale(), 'slug' => $review->slug]) }}">Подробнее</a>
                        </div>
                    @endforeach
                </div>
            </section>
            <div class="pagination container">
                {{ $reviews->links() }}
            </div>
        </main>
        @endsection
