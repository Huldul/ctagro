<!-- resources/views/components/news.blade.php -->
<div class="products-inner__video-wrapper">
    @foreach($news as $item)
        <div class="products-inner__card">
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
            <div class="products-inner__content">
                <p>{{ $item->title }}</p>
                <a href="{{ $item->link }}">Подробнее</a>
            </div>
        </div>
    @endforeach
</div>
