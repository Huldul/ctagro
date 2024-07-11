@extends('layout')

@section('content')
        <main>
            <section class="first__block">
                <img src="{{asset("storage/".$product->head_image)}}" alt="">
                <div class="first__block-wrapper container">
                    <h1>{{ $product->title }}</h1>
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
                    <li><a>Каталог</a></li>

                    @if ($product->subtype->type)
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                            </svg>
                        </li>
                        <li><a href="{{ route('catalog-inner', ['locale' => app()->getLocale(), 'slug' => $product->subtype->type->slug]) }}">{{ $product->subtype->type->title }}</a></li>
                    @endif

                    @if ($product->subtype)
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                            </svg>
                        </li>
                        <li><a href="{{ route('product.subtypes', ['locale' => app()->getLocale(), 'slug' => $product->subtype->slug]) }}">{{ $product->subtype->title }}</a></li>
                    @endif

                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                        </svg>
                    </li>
                    <li>{{ $product->title }}</li>
                </ul>
            </div>


            <section class="products-inner container">

                <div class="products-inner__wrapper">
                    <div class="products-inner__container about__container">
                        <div class="products-inner__left">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="">
                        </div>
                        <div class="products-inner__right">
                            <div class="products-inner__tabs tabs">
                                <a class="active" href="#desc">Описание</a>
                                <a href="#characteristics">Технические характеристики</a>
                            </div>
                            <h2></h2>
                            {!! $product->dscription1 !!}
                            <p class="hidden-text">{{ $product->dscription2 }}</p>

                            @if($product->dscription2 != "")
                                <button class="show-btn products-inner__btn">
                                    Подробнее
                                </button>
                            @endif
                        </div>
                    </div>

                    <div id="desc" class="products-inner__wrapp active">
                        <div class="products-inner__container about__container">
                            <div class="products-inner__right">
                                <h2>{{ $product->desc_title1 }}</h2>
                                <p>{!! $product->desc_main1 !!}</p>
                                <p></p>
                                <p class="hidden-text">{{ $product->desc_hidden_main1 }}</p>

                                @if($product->desc_hidden_main1 != "")
                                    <button class="show-btn products-inner__btn">
                                        Подробнее
                                    </button>
                                @endif
                            </div>
                            <div class="products-inner__left">
                                <img src="{{ asset('storage/' . $product->desc_image1) }}" alt="">
                            </div>
                        </div>
                        <div class="products-inner__container about__container products-inner-reverse">
                            <div class="products-inner__left">
                                <img src="{{ asset('storage/' . $product->desc_image2) }}" alt="">
                            </div>
                            <div class="products-inner__right">
                                <h2>{{ $product->desc_title2 }}</h2>
                                <p>{!! $product->desc_main2 !!}</p>
                                <p></p>
                                <p class="hidden-text">{{ $product->desc_hidden_main2 }}</p>

                                @if($product->desc_hidden_main2 != "")
                                    <button class="show-btn products-inner__btn">
                                        Подробнее
                                    </button>
                                @endif
                            </div>
                        </div>
                        @foreach($product->blocks as $index => $block)
                            @if($index % 2 == 0)
                            <div class="products-inner__container about__container">
                                <div class="products-inner__right">
                                    <h2>{{ $block->title }}</h2>
                                    <p>{!! $block->main !!}</p>
                                    <p class="hidden-text">{{ $block->hidden_main }}</p>

                                    @if($block->hidden_main != "")
                                        <button class="show-btn products-inner__btn">
                                            Подробнее
                                        </button>
                                    @endif
                                </div>
                                <div class="products-inner__left">
                                    <img src="{{ asset('storage/' . $block->image) }}" alt="">
                                </div>
                            </div>


                            @endif
                        @endforeach

                    </div>

                    <div id="characteristics" class="products-inner__wrapp">
                        <div class="products-inner__table">
                            {!!$product->techs!!}
                            {{-- <table>
                                <thead>
                                    <th>
                                        <div>
                                            <span>Технические характеристики</span>
                                        </div>
                                    </th>
                                    <th>
                                        <div><span>AXION 850</span></div>
                                    </th>
                                    <th>
                                        <div><span>AXION 820</span></div>
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Двигатели</td>
                                        <td>DPS</td>
                                        <td>DPS</td>
                                    </tr>
                                </tbody>
                            </table> --}}
                        </div>

                    </div>
                </div>
            </section>
            <section class="products-inner__video container indent">
                <h2 class="products-inner__title title">Хотите узнать о наc больше? <br><span>Переходите на наш youtube
                        канал.</span></h2>
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
                                        <img src="{{ $thumbnail_url }}" alt="">
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
                <div class="products-inner__video-wrapper">
                    @foreach ($products as $item)
                        <div class="products-inner__card">
                            <img src="{{asset("storage/".$item->image)}}" alt="">
                            <div class="products-inner__content">
                                <p>{{$item->title}}</p>
                                <a href="{{$item->link}}">Подробнее</a>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="products-inner__card">
                        <img src="{{asset("img/products-inner-img.png")}}" alt="">
                        <div class="products-inner__content">
                            <p>Успех любого бизнеса зависит от качества и развития партнерских связей.</p>
                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                    <div class="products-inner__card">
                        <img src="{{asset("img/products-inner-img.png")}}" alt="">
                        <div class="products-inner__content">
                            <p>Успех любого бизнеса зависит от качества и развития партнерских связей.</p>
                            <a href="#">Подробнее</a>
                        </div>
                    </div> --}}
                </div>
            </section>
            @include('components.form')
        </main>
        @endsection
