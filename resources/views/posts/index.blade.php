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
        <h1>Blog Name</h1>
        <div class='reviews'>
            @foreach ($reviews as $review)
                <div class='review'>
                    <img src="image/dinosaur.jpg" alt="Dinosaur">
                    <h2 class='title'>{{ $review->title }}</h2>
                    <p class='body'>{{ $review->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='tags'>
            @foreach ($tags as $tag)
                <font color="deepskyblue" class='tag'>#{{ $tag->name }}</font>
            @endforeach
        </div>
    </body>
</html>
