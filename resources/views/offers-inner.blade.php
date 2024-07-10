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
                <li><a href="{{ url(app()->getLocale() . '/offers') }}">Спецпредложения</a></li>
                <li>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                    </svg>
                </li>
                <li>{{ $offer->title }}</li>
            </ul>
        </div>
        <section class="news-inner container">
            <h1 class="title">{{ $offer->title }}</h1>
            <p>{{ $offer->inner_title }}</p>
            <img src="{{ asset('storage/' . $offer->image1) }}" alt="">

            @if($offer->subtitle1)
                <h2>{{ $offer->subtitle1 }}</h2>
            @endif
            @if($offer->text1)
                <p>{!! $offer->text1 !!}</p>
            @endif

            @if($offer->image2)
                <img src="{{ asset('storage/' . $offer->image2) }}" alt="">
            @endif

            @if($offer->subtitle2)
                <h2>{{ $offer->subtitle2 }}</h2>
            @endif
            @if($offer->text2)
                <p>{!! $offer->text2 !!}</p>
            @endif

            @if($offer->image3)
                <img src="{{ asset('storage/' . $offer->image3) }}" alt="">
            @endif

            @if($offer->subtitle3)
                <h2>{{ $offer->subtitle3 }}</h2>
            @endif
            @if($offer->text3)
                <p>{!! $offer->text3 !!}</p>
            @endif
        </section>

        @if ($offer->mult_images != "")
            <section class="gallery container indent">
                <h2 class="gallery__title title">Галерея</h2>
                <div class="gallery__wrapper">
                    @php
                        $images = json_decode($offer->mult_images, true);
                    @endphp

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
        @include('components.form')

        </main>
        @endsection
