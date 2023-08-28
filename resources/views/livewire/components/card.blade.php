<!-- resources/views/livewire/components/card.blade.php -->

<div class="card bg-white p-6 h-fit">
    <div class="flex">
        @for ($i = 1; $i <= 5; $i++)
            @if ($i <= $starRating)
                @if ($i == 1)
                    <img src="{{ asset('icons/Full_Star.svg') }}" alt="Full Star">
                @else
                    <img src="{{ asset('icons/Full_Star.svg') }}" alt="Full Star" class="ml-1">
                @endif
            @else
                <img src="{{ asset('icons/Empty_Star.svg') }}" alt="Empty Star" class="ml-1">
            @endif
        @endfor
    </div>
    <div class="mt-6">
        <p class="">“{{ $review }}”</p>
        <div class="flex mt-8 items-center justify-between">
            <img src="{{ $userImage }}" alt="{{ $userName }}" class="user-image">
            <div class="ml-4">
                <p class="username">{{ $userName }}</p>
                <p class="grey mt-2">{{ $userJob }}</p>
            </div>
        </div>
    </div>
</div>