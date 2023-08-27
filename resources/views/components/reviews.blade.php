
<style>
    .container {
        margin: 13rem auto;
        width: 80%;
    }
</style>
<div class="container flex flex-col justify-center items-center gap-6">
    @php
        $reviewsData = [
            [
                'starRating' => '<svg>...</svg>',
                'review' => 'You made it so simple.',
                'userImage' => 'images/Brittan_Wheeler.png',
                'userName' => 'John Doe',
                'userJob' => 'Web Developer',
            ],
        ];
    @endphp
    @foreach ($reviewsData as $reviewData)
        @component('components.card', $reviewData)
        @endcomponent
    @endforeach
</div>