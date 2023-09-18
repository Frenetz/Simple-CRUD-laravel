@extends('layouts.app2')

@section('header') 
    <header>
        Главные новости
    </header>
@endsection

@section('main') 
    <main>
        Новости
        @foreach ($news as $new)
           <h2>{{$new->name}}</h2>
           <p>{{$new->content}}</p>
        @endforeach    
    </main>
@endsection

@section('footer') 
    <footer>Вернуться в меню</footer>
@endsection