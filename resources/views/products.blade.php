@extends('layout')

@section('content')
        <main>
            <section class="first__block">
                <img src="{{asset("img/first-block-img.png")}}" alt="">
                <div class="first__block-wrapper container">
                    <h1>{{ $subtype->itle }}</h1>
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
                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                        </svg>
                    </li>

                    <li><a href="{{ route('catalog-inner', ['locale' => app()->getLocale(), 'slug' => $subtype->type->slug]) }}">{{ $subtype->type->title }}</a></li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                        </svg>
                    </li>
                    <li>{{ $subtype->title }}</li>
                </ul>
            </div>
            <section class="products container">
                <div class="products__wrapper">
                   @foreach ($products as $product)
                     <div class="products__card">
                         <div class="products__img">
                             <img src="{{ asset('storage/' . $product->image) }}" alt="">
                         </div>
                         <h2>{{$product->title}}</h2>
                         <span>{{$product->hp}}</span>
                         <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product->slug]) }}">Подробнее</a>
                     </div>
                   @endforeach
                </div>
                <h3 class="title">{{$subtype->subtitle}}</h3>
                {!!$subtype->main!!}
            </section>
            @include('components.form')
        </main>
        @endsection
