@extends('layout')

@section('content')
        <main>
            <section class="first__block">
                <img src="{{asset("storage/".$page->head_image)}}" alt="">
                <div class="first__block-wrapper container">
                    <h1>{{$page->head_title}}</h1>
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
                    <li>{{$page->head_title}}</li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                        </svg>
                    </li>
                    <li>Миссия компании</li>
                </ul>
            </div>
            <section class="about container">
                <div class="about__wrapper">
                    <div class="about__container">
                        <div class="about__left">
                            <h2 class="about__title title">{!!$page->head_subtitle!!}</h2>
                            {!!$page->head_main!!}
                            <div class="hidden-text"> {!!$page->head_desc!!}</div>
                            <button class="more-btn" type="button">Подробнее</button>
                        </div>
                        <div class="about__right">
                            <div class="about__img">
                                <img src="{{asset("storage/".$page->image1)}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="about__container reverse">
                        <div class="about__right">
                            <div class="about__img">
                                <img src="{{asset("storage/".$page->image2)}}" alt="">
                            </div>
                        </div>
                        <div class="about__left">
                            {!!$page->sec_main!!}
                            <div class="hidden-text"> {!!$page->sec_desc!!}</div>
                            <button class="more-btn" type="button">Подробнее</button>
                        </div>
                    </div>
                    <div class="about__container">
                        <div class="about__left">
                            {!!$page->tr_main!!}
                            <div class="accordeon-wrapper">
                                <div class="accordeon-wrap">
                                    <div class="accordeon__box" data-accordeon-trigger="1">
                                        <p class="accordeon__title">{{$page->adv_title1}}</p>
                                    </div>
                                    <div class="accordeon__content" data-accordeon-content="1">
                                        {!!$page->adv_main1!!}
                                    </div>
                                </div>
                                <div class="accordeon-wrap">
                                    <div class="accordeon__box" data-accordeon-trigger="1">
                                        <p class="accordeon__title">{{$page->adv_title2}}</p>
                                    </div>
                                    <div class="accordeon__content" data-accordeon-content="1">
                                        {!!$page->adv_main2!!}
                                    </div>
                                </div>
                                <div class="accordeon-wrap">
                                    <div class="accordeon__box" data-accordeon-trigger="1">
                                        <p class="accordeon__title">{{$page->adv_title3}}</p>
                                    </div>
                                    <div class="accordeon__content" data-accordeon-content="1">
                                        {!!$page->adv_main3!!}
                                    </div>
                                </div>
                                <div class="accordeon-wrap">
                                    <div class="accordeon__box" data-accordeon-trigger="1">
                                        <p class="accordeon__title">{{$page->adv_title4}}</p>
                                    </div>
                                    <div class="accordeon__content" data-accordeon-content="1">
                                        {!!$page->adv_main4!!}
                                    </div>
                                </div>
                            </div>
                            <a href="{{route("catalog-library", ['locale' => app()->getLocale()])}}">В каталог</a>
                        </div>
                        <div class="about__right">
                            <div class="about__img">
                                <img src="{{asset("storage/".$page->image3)}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="about__container reverse">
                        <div class="about__right">
                            <div class="about__img">
                                <img src="{{asset("storage/".$page->image4)}}" alt="">
                            </div>
                        </div>
                        <div class="about__left">
                            <h2 class="about__title title">{{$page->four_title}}</h2>
                            {!!$page->four_main!!}
                            <a href="{{route("service", ['locale' => app()->getLocale()])}}">На страницу сервиса</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mission container indent">
                <h2 class="mission__title title">{{$page->mission_title}}</h2>
                {!!$page->mission_main!!}
                <div class="mission__wrapper">
                    <div class="mission__card">
                        @php
                            $svgData = json_decode($page->pricn_svg1, true);
                            $svgPath = $svgData[0]['download_link'] ?? '';
                            $svgFile = storage_path("app/public/{$svgPath}"); // Укажите путь к SVG файлу в хранилище
                        @endphp
                        @php
                            $svgContent = file_get_contents($svgFile);
                            header('Content-Type: image/svg+xml');
                        @endphp
                       {!! $svgContent !!}
                            <h5>{{$page->princ_title1}}</h5>
                            {!!$page->princ_main1!!}
                    </div>
                    <div class="mission__card">
                        @php
                        $svgData = json_decode($page->pricn_svg2, true);
                        $svgPath = $svgData[0]['download_link'] ?? '';
                        $svgFile = storage_path("app/public/{$svgPath}"); // Укажите путь к SVG файлу в хранилище
                    @endphp
                    @php
                        $svgContent = file_get_contents($svgFile);
                        header('Content-Type: image/svg+xml');
                    @endphp
                   {!! $svgContent !!}
                            <h5>{{$page->princ_title2}}</h5>
                            {!!$page->princ_main2!!}
                    </div>
                    <div class="mission__card">
                        @php
                        $svgData = json_decode($page->pricn_svg3, true);
                        $svgPath = $svgData[0]['download_link'] ?? '';
                        $svgFile = storage_path("app/public/{$svgPath}"); // Укажите путь к SVG файлу в хранилище
                    @endphp
                    @php
                        $svgContent = file_get_contents($svgFile);
                        header('Content-Type: image/svg+xml');
                    @endphp
                   {!! $svgContent !!}
                            <h5>{{$page->princ_title3}}</h5>
                            {!!$page->princ_main3!!}
                    </div>
                </div>
            </section>
            @php
                $images = json_decode($page->foot_images, true);
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


            @include('components.form')
        </main>
@endsection
