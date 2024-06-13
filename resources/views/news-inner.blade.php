@extends('layout')

@section('content')
<main>
    <section class="first__block">
        <img src="{{ asset('img/first-block-img.png') }}" alt="">
        <div class="first__block-wrapper container">
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
            <li><a href="{{ url(app()->getLocale() . '/news') }}">Новости</a></li>
            <li>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                </svg>
            </li>
            <li>{{ $news->title }}</li>
        </ul>
    </div>
    <section class="news-inner container">
        <h1 class="title">{{ $news->title }}</h1>
        <p>{{ $news->inner_title }}</p>
        @if($news->image1)
            <img src="{{ asset('storage/' . $news->image1) }}" alt="{{ $news->title }}">
        @endif
        @if($news->subtitle1)
            <h2>{{ $news->subtitle1 }}</h2>
            <p>{!! $news->text1 !!}</p>
        @endif
        @if($news->image2)
            <img src="{{ asset('storage/' . $news->image2) }}" alt="{{ $news->title }}">
        @endif
        @if($news->subtitle2)
            <h2>{{ $news->subtitle2 }}</h2>
            <p>{!! $news->text2 !!}</p>
        @endif
        @if($news->image3)
            <img src="{{ asset('storage/' . $news->image3) }}" alt="{{ $news->title }}">
        @endif
        @if($news->subtitle3)
            <h2>{{ $news->subtitle3 }}</h2>
            <p>{!! $news->text3 !!}</p>
        @endif
    </section>
    <section class="gallery container indent">
        <h2 class="gallery__title title">Галерея</h2>
        <div class="gallery__wrapper">
            @php
                $images = json_decode($news->mult_images, true);
            @endphp
            @if (!empty($images))
                @foreach($images as $index => $image)
                    @if ($index % 2 == 0)
                        <div class="gallery__left">
                            <div class="gallery__left-img">
                                <img src="{{ asset('storage/' . $image) }}" alt="Gallery Image {{ $index + 1 }}">
                            </div>
                            @if (isset($images[$index + 1]))
                                <div class="gallery__container">
                                    <div class="gallery__container-img">
                                        <img src="{{ asset('storage/' . $images[$index + 1]) }}" alt="Gallery Image {{ $index + 2 }}">
                                    </div>
                                    @if (isset($images[$index + 2]))
                                        <div class="gallery__container-img">
                                            <img src="{{ asset('storage/' . $images[$index + 2]) }}" alt="Gallery Image {{ $index + 3 }}">
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </section>
    @include('components.form')
</main>
@endsection
