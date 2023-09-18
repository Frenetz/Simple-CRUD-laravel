@extends('layout')

@section('title')
    <p>Люди</p>
@endsection

@section('head')
    <header>Наша команда</header>
@endsection

@section('main')
        <div>Здесь содержится информация по каждому человеку</div>
        
@endsection
    {{$people}}
@section('footer')
    <footer>Связаться с нами можно по телефону 89091232434</footer>
@endsection