@extends('layout')

@section('content')
        <main>
            <section class="first__block">
                <img src="{{asset("img/first-block-img.png")}}" alt="">
                <div class="first__block-wrapper container">
                    <h1>Наши партнеры</h1>
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

                    <li>Наши партнеры</li>
                    <li>
                </ul>
            </div>



            <section class="catalog-library container">
                <h2 class="visually-hidden">Наши партнеры</h2>
                <div class="partners catalog-library__wrapper">
                    @foreach ($partners as $partner)
                        <a href="{{ url(app()->getLocale() .'/partners-inner/'. $partner->slug . '/') }}" class="catalog-library__card">
                            <img src="{{ asset("storage/". $partner->image) }}" alt="">
                        </a>
                    @endforeach
                </div>
            </section>
            <div class="pagination container">
                {{ $partners->links('vendor.pagination.custom') }}
            </div>



        </main>
        @endsection
