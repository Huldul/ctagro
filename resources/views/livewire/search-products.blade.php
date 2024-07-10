<div class="header__search search">
    <button class="search__btn change-color" wire:click.prevent="$toggle('showSearch')">
        <span>Поиск</span>
        <div class="search__btn-icon">
            <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" stroke="#fff"></path>
                <path d="M17.5 17.5L13.875 13.875" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" stroke="#fff"></path>
            </svg>
        </div>
    </button>
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
