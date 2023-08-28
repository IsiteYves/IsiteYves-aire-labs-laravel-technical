
<style>
    .container {
        margin: 13rem auto;
        width: 80%;
    }
</style>
<div class="container flex flex-wrap justify-center gap-6">
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
        @component('components.card', $reviewData)
        @endcomponent
    @endforeach
</div>