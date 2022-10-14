@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Camp</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/camps" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="review[title]" placeholder="タイトル" value="{{ old('review.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('review.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="review[body]" placeholder="今日も1日お疲れさまでした。">{{ old('review.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('review.body') }}</p>
            </div>
            <div class='tag'>
                <h2>Category</h2>
                <select name="review[tag_id]">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
                </select>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="back">[<a href="/camps">back</a>]</div>
    </body>
</html>
@endsection