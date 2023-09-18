@extends('layouts.app')
@if (session('success'))
    <p style="color: green;">{{session('success')}}</p>
@endif
@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <p style="margin-bottom: 0;">Статья №{{$article->id}}</p>
        <a href="/articles/{{$article->id}}">{{$article->name}}</a>
        <div>{{Str::limit($article->body, 100)}}</div>
        <a href="/articles/{{$article->id}}/edit">Редактировать статью</a>
        <br>
    @endforeach
@endsection