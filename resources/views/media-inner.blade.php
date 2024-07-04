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
            <li><a href="{{ url(app()->getLocale() . '/media') }}">Пресса о нас</a></li>
            <li>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                </svg>
            </li>
            <li>{{ $med->title }}</li>
        </ul>
    </div>
    <section class="news-inner container">
        <h1 class="title">{{ $med->title }}</h1>
        <p>{{ $med->inner_title }}</p>
        <img src="{{ asset('storage/' . $med->image1) }}" alt="{{ $med->title }}">

        @if($med->subtitle1)
            <h2>{{ $med->subtitle1 }}</h2>
        @endif
        @if($med->text1)
            <p>{!! $med->text1 !!}</p>
        @endif

        @if($med->image2)
            <img src="{{ asset('storage/' . $med->image2) }}" alt="">
        @endif

        @if($med->subtitle2)
            <h2>{{ $med->subtitle2 }}</h2>
        @endif
        @if($med->text2)
            <p>{!! $med->text2 !!}</p>
        @endif

        @if($med->image3)
            <img src="{{ asset('storage/' . $med->image3) }}" alt="">
        @endif

        @if($med->subtitle3)
            <h2>{{ $med->subtitle3 }}</h2>
        @endif
        @if($med->text3)
            <p>{!! $med->text3 !!}</p>
        @endif
    </section>

    <section class="gallery container indent">
        <h2 class="gallery__title title">Галерея</h2>
        <div class="gallery__wrapper">
            @php
                $images = json_decode($med->mult_images, true);
            @endphp
            @if (!empty($images))
            <section class="gallery container indent">
                <h2 class="gallery__title title">Галерея</h2>
                <div class="gallery__wrapper">
                    @foreach($images as $index => $image)
                        @if ($index % 3 == 0)
                            @php
                                $class = ($index / 3) % 2 == 0 ? 'gallery__left' : 'gallery__right';
                            @endphp
                            <div class="{{ $class }}">
                                <div class="{{ $class }}-img">
                                    <img src="{{ asset('storage/' . $image) }}" alt="Gallery Image {{ $index + 1 }}">
                                </div>
                                @if (isset($images[$index + 1]) || isset($images[$index + 2]))
                                    <div class="gallery__container">
                                        @if (isset($images[$index + 1]))
                                            <div class="gallery__container-img">
                                                <img src="{{ asset('storage/' . $images[$index + 1]) }}" alt="Gallery Image {{ $index + 2 }}">
                                            </div>
                                        @endif
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
                </div>
            </section>
        @endif
        </div>
    </section>
    @include('components.form')
</main>
@endsection
