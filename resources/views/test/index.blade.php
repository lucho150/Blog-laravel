
<h1>{{$articles->title}}</h1>
<hr>
{{$articles->content}}
<hr>
{{$articles->user->name}}|{{$articles->category->name}}
<hr>
@foreach($articles->tags as $tag)
{{$tag->name}}
@endforeach



