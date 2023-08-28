<!-- resources/views/components/card.blade.php -->

<div class="card bg-white p-6" style="border: 2px solid #111111;">
    <div class="flex">
        @for ($i = 1; $i <= 5; $i++)
            @if ($i <= $starRating)
                <img src="{{ asset('icons/Full_Star.svg') }}" alt="Full Star">
            @else
                <img src="{{ asset('icons/Empty_Star.svg') }}" alt="Empty Star">
            @endif
        @endfor
    </div>
    <div class="mt-6">
        <p class="">“{{ $review }}”</p>
        <div class="flex mt-6 items-center justify-between">
            <img src="{{ $userImage }}" alt="{{ $userName }}" class="user-image">
            <div class="ml-4">
                <p class="username">{{ $userName }}</p>
                <p style="color: #808080;margin-top: 0.3rem;">{{ $userJob }}</p>
            </div>
        </div>
    </div>
</div>