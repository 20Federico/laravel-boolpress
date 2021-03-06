@extends('layouts.admin')

@section('content')
<div class="container py-5">
  @if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
  @endif
  <div class="row justify-content-center">

      <div class="col-md-10">
        <div class="card">
          <div class="card-header"><strong>{{ $post->title }}</strong></div>

            <div class="card-body">
              <p style="position: absolute; top:5px; right: 5px; font-size:12px">
                {{$post->publish_date}}
              </p>
              <h4>Autore:</h4>
              <p>{{$post->user->name}}</p>
              <h4>Categoria:</h4>
              <p>{{$post->category->name}}</p>
              @if ($post->tags->count() > 0)
              <h4>Tags:</h4>
              @endif
              <p>
                @foreach ($post->tags as $tag)
                {{$tag->name}}
                @endforeach
              </p>
              <h4>Descrizione</h4>
              <p>{{$post->description}}</p>
              <h4>Contenuto</h4>
              <p>{{$post->body}}</p>

              <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-success">Modifica</a>
              <form class="d-inline-block" action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger" type="submit" value="Cancella">
              </form>

            </div>

          </div>
        </div>
      </div>
  </div>    
</div>
@endsection