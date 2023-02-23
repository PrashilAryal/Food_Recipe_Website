@extends('layout.main')
@section('content')
<div class="container mt-5 mb-5">

  @if (count($posts) > 0)
  <p class="text-center mb-3">Search results for "{{ $query }}":</p>
  <ul class="list-group">
    @foreach ($posts as $post)
    {{-- {{ route('posts.show', $post->id) }} --}}
    <li class="border-3 list-group-item"><h3 class="text-success"><a href="" class="text-decoration-none">{{ $post->recipe_name }}</a></h3>
    <p>{{$post->recipe_description}}</p>
    </li>
    @endforeach
  </ul>
  @else
  <p class="text-danger">No search results for "{{ $query }}".</p>
  @endif
</div>
@endsection