<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Camp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>CampSite</h1>
        <p>[<a href='/camps/create'>口コミを投稿する</a>]</p>
        <div class='site'>
            @foreach ($sites as $site)
                    <img src="image/dinosaur.jpg" alt="Dinosaur">
                    <h2 class='title'>{{ $site->name }}</h2>
                    <!-- <p class='body'>{{ $site->body }}</p> -->
            @endforeach
        </div>
        <div class='tags'>
            @foreach ($tags as $tag)
                <font color="deepskyblue" class='tag'>#{{ $tag->name }}</font>
            @endforeach
        </div>
        <div class='reviews'>
            @foreach ($reviews as $review)
                <div class='review'>
                    <img src="image/dinosaur.jpg" alt="Dinosaur">
                    <h2 class='title'><a href="/camps/{{ $review->id }}">{{ $review->title }}</h2></a>
                    <p class='body'>{{ $review->body }}</p>
                </div>
            @endforeach
        </div>
        <div class="back">[<a href="/camps">back</a>]</div>
    </body>
</html>
