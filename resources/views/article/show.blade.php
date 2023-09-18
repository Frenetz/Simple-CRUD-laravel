<p>Новость №{{$article->id}}</p>
<p>{{$article->name}}</p>
<p>{{$article->body}}</p>
<form action="{{ route('articles.delete', $article->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Удалить</button>
</form>
<a href="{{route('articles.index')}}">Назад к списку новостей</a>