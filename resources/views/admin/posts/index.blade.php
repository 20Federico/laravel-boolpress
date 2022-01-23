@extends('layouts.admin')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">

      <div class="col-md-10">
        <div class="card">
          <div class="card-header">{{ __('Posts') }}</div>

            <div class="card-body">
              <div class="text-center">
                <a href="{{route('admin.posts.create')}}" class="btn btn-primary mb-3">crea nuovo post</a>
              </div>
              <div>
                <div class="row row-cols-3">
                  
                  @foreach ($posts as $post)
                  <div class="col">

                    <div class="card" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autore: {{$post->author}} </h6>
                        <p class="card-text">{{$post->description}}</p>
                        <p style="position: absolute; top:5px; right: 5px; font-size:11px">{{$post->publish_date}}</p>
                        <a href="{{route('admin.posts.show', $post->id)}}" class="card-link">Vedi Post</a>
                        {{-- <a href="#" class="card-link">Another link</a> --}}
                      </div>
                    </div>
                    
                  </div>
                  @endforeach
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
  </div>    
</div>
@endsection