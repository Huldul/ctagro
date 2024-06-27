<!-- resources/views/components/news.blade.php -->
<div class="products-inner__video-wrapper">
    @foreach($news as $item)
        <div class="products-inner__card">
            <img src="{{ asset('storage/' . $item->image1) }}" alt="{{ $item->title }}">
            <div class="products-inner__content">
                <p>{{ $item->title }}</p>
                <a href="{{ url(app()->getLocale() . '/news-inner/' . $item->slug) }}">Подробнее</a>
            </div>
        </div>
    @endforeach
</div>
