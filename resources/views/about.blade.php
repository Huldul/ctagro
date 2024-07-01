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
                            <h2 class="about__title title">{{$page->head_subtitle}}</h2>
                            {!!$page->head_main!!}
                            <p class="hidden-text"> {!!$page->head_desc!!}</p>
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
                            <p class="hidden-text"> {!!$page->sec_desc!!}</p>
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
                            <h5>Надежность</h5>
                            <p>Сельскохозяйственная деятельность связана со значительным риском. Мы прекрасно понимаем, насколько ценны для агропредприятий надежная техника и крепкие партнерские связи. Поэтому предлагаем высокопроизводительные машины и оборудование, которые никогда не подведут, безупречный и своевременный сервис, а также обучаем механизаторов и инженерно-технический персонал.</p>
                    </div>
                    <div class="mission__card">
                        <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_183_3814)">
                            <path d="M38.3804 51.8595C35.9835 52.9233 33.3679 53.4828 30.6666 53.4828C27.9653 53.4828 25.3502 52.9233 22.9533 51.8595C22.1518 52.9536 21.1259 53.8215 19.9545 54.4162C23.2092 56.169 26.8662 57.1 30.6666 57.1C34.4675 57.1 38.1244 56.169 41.3792 54.4162C40.2073 53.8215 39.1815 52.954 38.3804 51.8595ZM43.7793 20.6909C43.8918 20.7984 44.0036 20.9074 44.1143 21.0181C45.6671 22.5708 46.9172 24.3452 47.8374 26.2693C48.7031 26.0352 49.596 25.9164 50.4929 25.9162C50.8878 25.9162 51.2784 25.9414 51.6647 25.9858C50.5409 23.2021 48.8586 20.6469 46.6718 18.4601C45.964 17.7525 45.2106 17.0919 44.4165 16.4826C44.5685 17.898 44.3555 19.34 43.7793 20.6908V20.6909ZM13.4959 26.2692C14.4165 24.3452 15.6666 22.5708 17.2193 21.0181C17.3301 20.9074 17.4418 20.7984 17.5545 20.6909C16.9776 19.34 16.7648 17.898 16.9172 16.4827C16.1231 17.092 15.3697 17.7525 14.6618 18.4601C12.4756 20.6469 10.7928 23.2021 9.66895 25.9859C10.0579 25.9403 10.4492 25.9171 10.8408 25.9162C11.7376 25.9164 12.6303 26.035 13.4959 26.2692ZM21.1831 14.8846C20.2758 16.4149 20.262 18.2546 21.1461 19.806C22.0373 21.3706 23.6431 22.3054 25.4412 22.3054H35.892C37.6905 22.3054 39.2959 21.3706 40.1876 19.806C41.0716 18.2546 41.0574 16.4149 40.1506 14.8846C39.0784 13.0764 37.5189 11.6409 35.6988 10.7043C36.6427 9.54979 37.1559 8.11753 37.1559 6.60639C37.1559 4.87284 36.4811 3.24311 35.2552 2.0178C34.0299 0.7919 32.4002 0.117134 30.6666 0.117134C28.9334 0.117134 27.3039 0.7919 26.078 2.0178C24.8526 3.24323 24.1774 4.87284 24.1774 6.60639C24.1774 8.11753 24.691 9.54979 25.6349 10.7043C23.8148 11.6409 22.2548 13.0764 21.1831 14.8846ZM20.3615 49.2192C21.2453 47.6678 21.2316 45.8285 20.3243 44.2982C19.2528 42.49 17.6927 41.0545 15.8726 40.1179C16.8165 38.9634 17.3301 37.5311 17.3301 36.02C17.3301 34.2864 16.655 32.6567 15.4291 31.4309C12.899 28.9013 8.7822 28.9013 6.25224 31.4309C5.02645 32.6567 4.3511 34.2864 4.3511 36.0195C4.3511 37.5311 4.86474 38.9634 5.80868 40.1179C3.98864 41.054 2.42899 42.49 1.35696 44.2982C0.449579 45.828 0.435868 47.6678 1.31981 49.2192C2.21114 50.7842 3.81696 51.7185 5.61509 51.7185H16.0659C17.8643 51.7185 19.4702 50.7842 20.3614 49.2192H20.3615ZM55.525 40.1179C56.4684 38.9634 56.9821 37.5311 56.9821 36.02C56.9821 34.2864 56.3069 32.6567 55.0813 31.4314C52.5514 28.9013 48.4342 28.9013 45.9042 31.4314C44.6784 32.6568 44.0036 34.2864 44.0036 36.02C44.0036 37.5311 44.5167 38.9634 45.4606 40.1179C43.6406 41.0545 42.0809 42.49 41.0089 44.2982C40.1021 45.8285 40.0878 47.6683 40.9717 49.2196C41.8635 50.7842 43.4693 51.7185 45.267 51.7185H55.7178C57.5158 51.7185 59.1216 50.7842 60.0134 49.2196C60.8974 47.6683 60.8832 45.8285 59.9763 44.2982C58.9047 42.49 57.3451 41.0545 55.525 40.1179Z" fill="#6EB513"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_183_3814">
                            <rect width="60" height="60" fill="white" transform="translate(0.666626)"/>
                            </clipPath>
                            </defs>
                            </svg>
                            <h5>Партнерство</h5>
                            <p>Успех любого бизнеса зависит от качества и развития партнерских связей. С каждым клиентом мы стремимся развивать долговременные отношения, основанные на взаимном доверии. Когда успех каждого открывает новые возможности и перспективы для партнера.</p>
                    </div>
                    <div class="mission__card">
                        <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.0834 27.5H11.5834C10.893 27.5 10.3334 28.0596 10.3334 28.75V33.75C10.3334 34.4404 10.893 35 11.5834 35H14.0834C14.7737 35 15.3334 34.4404 15.3334 33.75V28.75C15.3334 28.0596 14.7737 27.5 14.0834 27.5Z" fill="#6EB513"/>
                            <path d="M52.8334 33.75C52.8324 34.7443 52.437 35.6975 51.7339 36.4006C51.0309 37.1036 50.0776 37.499 49.0834 37.5H46.5834C45.5891 37.499 44.6359 37.1036 43.9328 36.4006C43.2298 35.6975 42.8344 34.7443 42.8334 33.75V32.5H17.8334V33.75C17.8324 34.7443 17.437 35.6975 16.7339 36.4006C16.0309 37.1036 15.0776 37.499 14.0834 37.5H11.5834C10.5891 37.499 9.63587 37.1036 8.93282 36.4006C8.22977 35.6975 7.83437 34.7443 7.83337 33.75V32.5H2.83337V52.5C2.83337 53.4946 3.22846 54.4484 3.93172 55.1516C4.63499 55.8549 5.58881 56.25 6.58337 56.25H54.0834C55.0779 56.25 56.0318 55.8549 56.735 55.1516C57.4383 54.4484 57.8334 53.4946 57.8334 52.5V32.5H52.8334V33.75ZM55.3334 13.75H42.8334V8.75C42.8334 7.42392 42.3066 6.15215 41.3689 5.21447C40.4312 4.27678 39.1595 3.75 37.8334 3.75H22.8334C21.5073 3.75 20.2355 4.27678 19.2978 5.21447C18.3602 6.15215 17.8334 7.42392 17.8334 8.75V13.75H5.33337C4.33912 13.751 3.38587 14.1464 2.68282 14.8494C1.97977 15.5525 1.58437 16.5057 1.58337 17.5V26.25C1.58437 27.2443 1.97977 28.1975 2.68282 28.9006C3.38587 29.6036 4.33912 29.999 5.33337 30H7.83337V28.75C7.83437 27.7557 8.22977 26.8025 8.93282 26.0994C9.63587 25.3964 10.5891 25.001 11.5834 25H14.0834C15.0776 25.001 16.0309 25.3964 16.7339 26.0994C17.437 26.8025 17.8324 27.7557 17.8334 28.75V30H42.8334V28.75C42.8344 27.7557 43.2298 26.8025 43.9328 26.0994C44.6359 25.3964 45.5891 25.001 46.5834 25H49.0834C50.0776 25.001 51.0309 25.3964 51.7339 26.0994C52.437 26.8025 52.8324 27.7557 52.8334 28.75V30H55.3334C56.3276 29.999 57.2809 29.6036 57.9839 28.9006C58.687 28.1975 59.0824 27.2443 59.0834 26.25V17.5C59.0824 16.5057 58.687 15.5525 57.9839 14.8494C57.2809 14.1464 56.3276 13.751 55.3334 13.75ZM22.8334 13.75V8.75H37.8334V13.75H22.8334Z" fill="#6EB513"/>
                            <path d="M49.0834 27.5H46.5834C45.893 27.5 45.3334 28.0596 45.3334 28.75V33.75C45.3334 34.4404 45.893 35 46.5834 35H49.0834C49.7737 35 50.3334 34.4404 50.3334 33.75V28.75C50.3334 28.0596 49.7737 27.5 49.0834 27.5Z" fill="#6EB513"/>
                            </svg>
                            <h5>Ответственность</h5>
                        <p>Мы несем полную ответственность как за поставляемую технику, так и за своевременность и качество выполняемых работ по ее ремонту и обслуживанию. Каждый наш клиент может быть уверен, что машины от CT AGRO будут в строю и отработают максимально эффективно даже в самых непростых условиях эксплуатации.</p>
                    </div>
                </div>
            </section>
            <section class="gallery container indent">
                <h2 class="gallery__title title">Галерея</h2>
                <div class="gallery__wrapper">
                    <div class="gallery__left">
                        <div class="gallery__left-img">
                            <img src="{{asset("img/news-slide-img.png")}}" alt="">
                        </div>
                        <div class="gallery__container">
                            <div class="gallery__container-img">
                                <img src="{{asset("img/equipment-img.png")}}" alt="">
                            </div>
                            <div class="gallery__container-img">
                                <img src="{{asset("img/equipment-img.png")}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="gallery__right">
                        <div class="gallery__right-img">
                            <img src="{{asset("img/about-img.png")}}" alt="">
                        </div>
                    </div>
                </div>
            </section>
            @include('components.form')
        </main>
@endsection
