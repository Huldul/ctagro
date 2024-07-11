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
                <div class="service__left-text">
                <h2 class="title">{!! $page->subtitle1 !!}</h2>
                {!! $page->main1 !!}
                <!-- <div class="hidden-text">{!! $page->desc1 !!}</div> -->
                </div>
                <button class="more-btn">Подробнее</button>
            </div>
            <div class="service__right">
                <img src="{{ asset("storage/".$page->image1) }}" alt="">
            </div>
        </div>
        <!-- <div class="service__info">
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
        </div> -->
        <div class="service__container about__container reverse">
            <div class="service__right">
                <img src="{{ asset("storage/".$page->image2) }}" alt="">
            </div>
            <div class="service__left">
            <div class="service__left-text">
            <h2 class="title">{!! $page->subtitle2 !!}</h2>
                {!! $page->main2 !!}
                <!-- <div class="hidden-text">{!! $page->desc2 !!}</div> -->
            </div>
                <button class="more-btn">Подробнее</button>
            </div>
        </div>
    </section>


    <section class="products-inner__video container indent">
        <h2 class="products-inner__title title">Хотите узнать о наc больше? <br><span>Переходите на наш youtube канал.</span></h2>
        <div class="swiper video__slider">
                    <div class="swiper-wrapper">
                        @foreach ($videos as $video)
                            <?php
                            $thumbnail_url = './img/about-img.png'; // URL изображения по умолчанию

                            // Проверка для YouTube с форматом /embed/
                            if (preg_match('/youtube\.com\/embed\/([^\\?\\&]+)/', $video->url, $matches)) {
                                if (isset($matches[1])) {
                                    $video_id = $matches[1];
                                    $thumbnail_url = "https://img.youtube.com/vi/{$video_id}/hqdefault.jpg";
                                }
                            }
                            // Проверка для Vimeo
                            elseif (preg_match('/vimeo\.com\/(\d+)/', $video->url, $matches)) {
                                if (isset($matches[1])) {
                                    $video_id = $matches[1];
                                    $vimeo_api_url = "https://vimeo.com/api/v2/video/{$video_id}.json";
                                    $vimeo_response = json_decode(file_get_contents($vimeo_api_url), true);
                                    if (isset($vimeo_response[0]['thumbnail_large'])) {
                                        $thumbnail_url = $vimeo_response[0]['thumbnail_large'];
                                    }
                                }
                            }
                            ?>
                            <div class="swiper-slide video__slider-slide">
                                <div class="video__slide">
                                    <div data-id="" data-url="{{$video->url}}" class="video__slide-video">
                                        <img src="{{ asset("storage/".$video->image) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        {{-- <div class="swiper-slide video__slider-slide">
                            <div class="video__slide">
                                <div class="video__slide-video">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/aWjtf9VWYUM?si=LinI_HE9-qmZu_YS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide video__slider-slide">
                            <div class="video__slide">
                                <div class="video__slide-video">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/mjMVWQEGrOQ?si=isrJ1bLmfUBYmSoY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide video__slider-slide">
                            <div class="video__slide">
                                <div class="video__slide-video">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/aWjtf9VWYUM?si=LinI_HE9-qmZu_YS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="nav-btn">
                        <div class="swiper-button-prev">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="56" y="56" width="56" height="56" rx="28" transform="rotate(-180 56 56)" fill="#dadada" />
                                <path d="M31 34.24L24 27.52L31 20.8" stroke="#636362" stroke-width="3"/>
                                </svg>

                        </div>
                        <div class="swiper-button-next">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="56" height="56" rx="28" fill="#dadada" />
                                <path d="M25 21.76L32 28.48L25 35.2" stroke="#636362" stroke-width="3"/>
                                </svg>

                        </div>
                    </div>
                </div>
        @include('components.news', ['news' => $news])
    </section>
    @include('components.form')
</main>
@endsection
