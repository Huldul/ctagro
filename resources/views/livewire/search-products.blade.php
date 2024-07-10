<div>
    <form wire:submit.prevent="updatedSearchTerm">
        <input type="search" wire:model.debounce.300ms="searchTerm" required>
        <button type="submit">найти</button>
    </form>
    @if ($results)
        <div class="search__result">
            @foreach ($results as $result)
                <div>{{ $result->title }}</div>
            @endforeach
        </div>
    @else
        <div class="search__result-not-found">поиск не дал результатов</div>
    @endif
</div>
