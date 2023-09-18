{{ Form::model($article, ['route' => ['articles.update', $article], 'method' => 'PATCH']) }}
    @include('article.form')
    {{ Form::submit('Обновить') }}
{{ Form::close() }}
<a href="{{route('articles.index')}}">Список всех статей</a>