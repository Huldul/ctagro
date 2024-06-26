@extends('layout')

@section('content')
        <main>
            <section class="first__block">
                <img src="{{asset("img/first-block-img.png")}}" alt="">
                <div class="first__block-wrapper container">
                    <h1>{{$review->title}}</h1>
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
                    <li><a href="{{ route('about', ['locale' => app()->getLocale()]) }}">О компании</a></li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                        </svg>
                    </li>
                    <li><a href="{{ route('reviews', ['locale' => app()->getLocale()]) }}">Отзывы</a></li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                        </svg>
                    </li>
                    <li>{{$review->title}}</li>
                </ul>
            </div>
            <section class="partners-inner container">
                <div class="partners-inner__wrapper">
                    <div class="partners-inner__left">
                        <h2 class="title">{{$review->subtitle}}</h2>
                        {!!$review->main!!}
                    </div>
                    <div class="partners-inner__right">
                        <img src="{{asset("storage/".$review->image)}}" alt="">
                    </div>
                </div>
            </section>
            @include('components.form')
        </main>
        @endsection
