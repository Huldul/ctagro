@extends('layout')

@section('content')
<main>
    <section class="first__block">
        <img src="{{ asset("storage/".$page->head_image) }}" alt="">
        <div class="first__block-wrapper container">
            <h1>{!! $page->title !!}</h1>
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
            <li>Запчасти и сервис</li>
            <li>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                </svg>
            </li>
            <li>{!! $page->title !!}</li>
        </ul>
    </div>
    <section class="service container">
        <div class="service__container about__container">
            <div class="service__left">
                <h2 class="title">{{ $page->subtitle1 }}</h2>
                {!! $page->main1 !!}
                <p class="hidden-text">{{ $page->desc1 }}</p>
                <button class="more-btn">Подробнее</button>
            </div>
            <div class="service__right">
                <img src="{{ asset("storage/".$page->image1) }}" alt="">
            </div>
        </div>
        <div class="service__info">
            @foreach ($page->advantages as $advantage)
            @php
            $svgData = json_decode($advantage->svg, true);
            $svgPath = $svgData[0]['download_link'] ?? '';
            @endphp
            <div class="service__info-card">
                <span>{{$advantage->title}}</span>
                <p>{{$advantage->main}}</p>
                <img src="{{ asset("storage/{$svgPath}") }}" width="59" height="59" viewBox="0 0 59 59" fill="none">
            </div>
            @endforeach
        </div>
        <div class="service__container about__container">
            <div class="service__right">
                <img src="{{ asset("storage/".$page->image2) }}" alt="">
            </div>
            <div class="service__left">
                <h2 class="title">{{ $page->subtitle2 }}</h2>
                {!! $page->main2 !!}
                <p class="hidden-text">{{ $page->desc2 }}</p>
                <button class="more-btn">Подробнее</button>
            </div>
        </div>
    </section>

    <section class="products-inner__video container indent">
        <h2 class="products-inner__title title">Хотите узнать о наc больше? <br><span>Переходите на наш youtube канал.</span></h2>
        <div class="products-inner__video-wrapper">
            @foreach ($videos as $video)
            <div class="products-inner-video">
                <iframe width="560" height="315" src="{{$video->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
            </div>
            @endforeach
        </div>
        @include('components.news', ['news' => $news])
    </section>
    @include('components.form')
</main>
@endsection
