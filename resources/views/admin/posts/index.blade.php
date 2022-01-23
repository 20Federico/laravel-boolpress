@extends('layouts.admin')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">

      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Posts') }}</div>

            <div class="card-body">
              <div class="text-center">
                <a href="{{route('admin.posts.create')}}" class="btn btn-primary mb-3">crea nuovo post</a>
              </div>
              <ul class="list-group">
                @foreach ($posts as $post)
                <li class="list-group-item">{{$post->title}}</li>
                @endforeach
              </ul>                        
            </div>

          </div>
        </div>
      </div>
  </div>    
</div>
@endsection