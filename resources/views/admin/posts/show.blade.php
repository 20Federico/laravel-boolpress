@extends('layouts.admin')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">

      <div class="col-md-10">
        <div class="card">
          <div class="card-header"><strong>{{ $post->title }}</strong></div>

            <div class="card-body">
              <p style="position: absolute; top:5px; right: 5px; font-size:12px">
                {{$post->publish_date}}
              </p>
              <h4>Autore:</h4>
              <p>{{$post->author}}</p>
              <h4>Descrizione</h4>
              <p>{{$post->description}}</p>
              <h4>Contenuto</h4>
              <p>{{$post->body}}</p>

              {{-- <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-success">Modifica</a> --}}
              {{-- <a href="{{route('admin.posts.delete', $post->id)}}" class="btn btn-date">Elimina</a> --}}

            </div>

          </div>
        </div>
      </div>
  </div>    
</div>
@endsection