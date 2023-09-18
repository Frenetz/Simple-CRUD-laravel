{{ Form::model($article, ['route' => 'articles.store']) }}
@include('article.form')
{{ Form::submit('Сохранить') }}
{{ Form::close() }}
<a href="{{route('articles.index')}}">Список всех статей</a>