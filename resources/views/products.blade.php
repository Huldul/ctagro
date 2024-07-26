@extends('layout')

@section('content')
<main>
    <section class="first__block">
        <img src="{{asset("storage/".$subtype->head_image)}}" alt="">
        <div class="first__block-wrapper container">
            <h1>{{ $subtype->title }}</h1>
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
            <li><a href="{{ route('catalog-library', ['locale' => app()->getLocale()]) }}">Каталог</a></li>
            @if($subtype->type)
            <li>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                </svg>
            </li>
            <li>
                <a href="{{ route('catalog-inner', ['locale' => app()->getLocale(), 'slug' => $subtype->type->slug]) }}">{{ $subtype->type->title }}</a>
            </li>
            @endif
            @if(isset($subtype->parentSubtype))
            <li>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                </svg>
            </li>
            <li>
                <a href="{{ route('product.subtypes', ['locale' => app()->getLocale(), 'slug' => $subtype->parentSubtype->slug]) }}">{{ $subtype->parentSubtype->title }}</a>
            </li>
            @endif
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
        @if($subtype->subtypes && $subtype->subtypes->count() > 0)
                @foreach ($subtype->subtypes as $subsubtype)
                <div class="products__card">
                        <div class="products__img">
                            <img src="{{ asset('storage/' . $subsubtype->image) }}" alt="{{ $subsubtype->title }}">
                        </div>
                        <h2>{{ $subsubtype->title }}</h2>
                        <span>{{$product->horse_power}}</span>
                        <a href="{{ route('product.subtypes', ['locale' => app()->getLocale(), 'slug' => $subsubtype->slug]) }}"></a>
</div>
                @endforeach
            @else
                @foreach ($products as $product)
                <div class="products__card">
                        <div class="products__img">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}">
                        </div>
                        <h2>{{ $product->title }}</h2>
                        <span>{{$product->horse_power}}</span>
                        <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product->slug]) }}">Подробнее</a>

</div>
                @endforeach
            @endif
        </div>
        <h3 class="title">{{ $subtype->subtitle }}</h3>
        {!! $subtype->main !!}
    </section>
    @include('components.form')
</main>
@endsection
