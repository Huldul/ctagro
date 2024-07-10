<div>
    <form wire:submit.prevent="updatedSearchTerm">
        <input type="search" wire:model.debounce.300ms="searchTerm" required>
        <button type="submit">найти</button>
    </form>
    <div class="search__result">
        @if ($results)
            @foreach ($results as $result)
                <div>{{ $result->title }}</div>
            @endforeach
        @else
            <div class="search__result-not-found">поиск не дал результатов</div>
        @endif
    </div>
</div>
