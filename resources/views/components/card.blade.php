<!-- resources/views/components/card.blade.php -->

<div class="card bg-white p-6" style="border: 2px solid #111111;">
    <div class="flex">
        <!-- <div class="star-rating">
            {!! $starRating !!}
        </div> -->
    </div>
    <div class="">
        <p class="">“{{ $review }}”</p>
        <div class="flex mt-6 items-center justify-between">
            <img src="{{ $userImage }}" alt="{{ $userName }}" class="h-16">
            <div class="" style="border: 1px solid blue;">
                <p style="color: #111111">{{ $userName }}</p>
                <p>{{ $userJob }}</p>
            </div>
        </div>
    </div>
</div>