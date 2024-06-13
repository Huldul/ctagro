@extends('layout')

@section('content')
        <main>
            <section class="first__block">
                <img src="{{asset("img/first-block-img.png")}}" alt="">
                <div class="first__block-wrapper container">
                    <h1>Запасные части</h1>
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
                    <li>Запасные части</li>
                    <li>
                </ul>
            </div>
            <section class="spares service container">
                <div class="spares__wrapper">
                    <div class="service__container about__container">
                        <div class="service__left">
                            <h2 class="title">Сервисное обслуживание спецтехники</h2>
                            <p>Покупая сельхозтехнику у нашей фирмы, вы так же приобретаете в нашем  лице надежного партнера  по сервисному обслуживанию, который осуществляет консультативную, сервисную поддержку и обеспечивает запасными частями при любой Вашей потребности.</p>
                            <p>С момента своего основания сервисные центры выполняют ряд важных функций, включающих в себя:</p>
                            <p class="hidden-text">asdasdasdasdasdads</p>
                            <button class="more-btn">Подробнее</button>
                        </div>
                        <div class="service__right">
                            <img src="{{asset("img/about-img.png")}}" alt="">
                        </div>
                    </div>
                    <div class="service__container about__container">
                        <div class="service__right">
                            <img src="{{asset("img/about-img.png")}}" alt="">
                        </div>
                        <div class="service__left">
                            <h2 class="title">Cовременные офисы, расположенные на территории  центров позволяют клиентам получить <span>полную инфор­мацию о технике и схемах финансирования.</span></h2>
                            <p>Покупая сельхозтехнику у нашей фирмы, вы так же приобретаете в нашем  лице надежного партнера  по сервисному обслуживанию, который осуществляет консультативную, сервисную поддержку и обеспечивает запасными частями при любой Вашей потребности.</p>
                            <p>С момента своего основания сервисные центры выполняют ряд важных функций, включающих в себя:</p>
                            <p class="hidden-text">asdasdasdasdasdads</p>
                            <button class="more-btn">Подробнее</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="products-inner__video container indent">
                <h2 class="products-inner__title title">Хотите узнать о наc больше? <br><span>Переходите на наш youtube
                        канал.</span></h2>
                <div class="products-inner__video-wrapper">
                    <div class="products-inner-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/mjMVWQEGrOQ?si=isrJ1bLmfUBYmSoY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
                    </div>
                    <div class="products-inner-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/mjMVWQEGrOQ?si=isrJ1bLmfUBYmSoY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
                    </div>
                    <div class="products-inner-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/mjMVWQEGrOQ?si=isrJ1bLmfUBYmSoY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="products-inner__video-wrapper">
                    <div class="products-inner__card">
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
                    </div>
                    <div class="products-inner__card">
                        <img src="{{asset("img/products-inner-img.png")}}" alt="">
                        <div class="products-inner__content">
                            <p>Успех любого бизнеса зависит от качества и развития партнерских связей.</p>
                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                </div>
            </section>
            @include('components.form')
        </main>
        @endsection
