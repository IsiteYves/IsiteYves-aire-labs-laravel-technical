<!-- resources/views/livewire/components/reviews.blade.php -->

<style>
    .container {
        margin: 13rem auto;
        width: 82%;
    }
</style>
<div class="container flex flex-wrap sm:justify-between gap-2" style="align-items:flex-start;">
    @php
        $reviewsData = [
            [
                'starRating' => 4, // Integer value for star rating
                'review' => 'You made it so simple.',
                'userImage' => 'images/Brittan_Wheeler.png',
                'userName' => 'Brittan Wheeler',
                'userJob' => 'Consultant',
            ],
            [
                'starRating' => 3,
                'review' => 'You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.',
                'userImage' => 'images/Alexa_Popen.png',
                'userName' => 'Alexa Popen',
                'userJob' => 'CEO',
            ],
            [
                'starRating' => 5,
                'review' => 'You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.',
                'userImage' => 'images/Leslie_Alexander.png',
                'userName' => 'Leslie Alexander',
                'userJob' => 'Founder',
            ],
            [
                'starRating' => 5,
                'review' => 'You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.',
                'userImage' => 'images/Leslie_Alexander.png',
                'userName' => 'Leslie Alexander',
                'userJob' => 'Founder',
            ],
            [
                'starRating' => 5,
                'review' => 'You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.',
                'userImage' => 'images/Leslie_Alexander.png',
                'userName' => 'Leslie Alexander',
                'userJob' => 'Founder',
            ],
            [
                'starRating' => 5,
                'review' => 'You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.',
                'userImage' => 'images/Leslie_Alexander.png',
                'userName' => 'Leslie Alexander',
                'userJob' => 'Founder',
            ],
        ];
    @endphp
    @foreach ($reviewsData as $reviewData)
        @component('livewire.components.card', $reviewData)
        @endcomponent
    @endforeach
</div>