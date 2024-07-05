@extends('layout')

@section('content')
        <main>
            <section class="first__block">
                <img src="{{asset("img/first-block-img.png")}}" alt="">
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
                    <li>Каталог</li>

                    @if(isset($product->subtype))
                        @php
                            $subtype = $product->subtype;
                            $parentSubtype = $subtype->parentSubtype;
                            $type = $subtype->type;
                            $breadcrumbs = [];

                            if ($type) {
                                $breadcrumbs[] = ['title' => $type->title, 'slug' => $type->slug];
                            }

                            if ($parentSubtype) {
                                $currentSubtype = $parentSubtype;
                                while ($currentSubtype) {
                                    $breadcrumbs[] = ['title' => $currentSubtype->title, 'slug' => $currentSubtype->slug];
                                    $currentSubtype = $currentSubtype->parentSubtype;
                                }
                            }

                            $breadcrumbs = array_reverse($breadcrumbs);
                        @endphp

                        @foreach($breadcrumbs as $breadcrumb)
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                                </svg>
                            </li>
                            <li>
                                <a href="{{ route('catalog-inner', ['locale' => app()->getLocale(), 'slug' => $breadcrumb['slug']]) }}">{{ $breadcrumb['title'] }}</a>
                            </li>
                        @endforeach

                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                            </svg>
                        </li>
                        <li>
                            <a href="{{ route('product.subtypes', ['locale' => app()->getLocale(), 'slug' => $subtype->slug]) }}">{{ $subtype->title }}</a>
                        </li>
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
                            <img src="{{asset("storage/".$product->image)}}" alt="">
                        </div>
                        <div class="products-inner__right">
                            <div class="products-inner__tabs tabs">
                                <a class="active" href="#desc">Описание</a>
                                <a href="#characteristics">Технические характеристики</a>
                            </div>
                            <h2></h2>
                        {!!$product->dscription1!!}
                            <p class="hidden-text">{{$product->dscription2}}</p>

                            <button class="more-btn products-inner__btn">
                                Подробнее
                            </button>
                        </div>
                    </div>
                    <div id="desc" class="products-inner__wrapp active">
                        <div class="products-inner__container about__container">
                            <div class="products-inner__right">
                                <h2>{{$product->desc_title1}}</h2>
                                <p></p>
                                <p></p>
                                <p class="hidden-text">{{$product->desc_main1}}</p>
                                <button class="more-btn products-inner__btn">
                                    Подробнее
                                </button>
                            </div>
                            <div class="products-inner__left">
                                <img src="{{asset("storage/".$product->desc_image1)}}" alt="">
                            </div>
                        </div>
                        <div class="products-inner__container about__container products-inner-reverse">
                            <div class="products-inner__left">
                                <img src="{{asset("storage/".$product->desc_image2)}}" alt="">
                            </div>
                            <div class="products-inner__right">
                                <h2>{{$product->desc_title2}}</h2>
                                <p></p>
                                <p></p>
                                <p class="hidden-text">{{$product->desc_main2}}</p>
                                <button class="more-btn products-inner__btn">
                                    Подробнее
                                </button>
                            </div>
                        </div>
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
                <div class="products-inner__video-wrapper">
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

                                <div class="video__slide">
                                    <div data-id="" data-url="{{$video->url}}" class="video__slide-video">
                                        <img src="{{ $thumbnail_url }}" alt="">
                                    </div>
                                </div>

                        @endforeach
                    {{-- <div class="products-inner-video">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/mjMVWQEGrOQ?si=isrJ1bLmfUBYmSoY"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
                    </div>
                    <div class="products-inner-video">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/mjMVWQEGrOQ?si=isrJ1bLmfUBYmSoY"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
                    </div> --}}
                </div>
                <div class="products-inner__video-wrapper">
                    @foreach ($products as $item)
                        <div class="products-inner__card">
                            <img src="{{asset("storage/".$item->image)}}" alt="">
                            <div class="products-inner__content">
                                <p>{{$item->title}}</p>
                                <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $item->slug]) }}">Подробнее</a>
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
