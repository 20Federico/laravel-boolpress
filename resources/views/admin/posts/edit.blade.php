@extends('layouts.admin')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">

      <div class="col-md-10">
        <div class="card">
          <div class="card-header">{{ __('Modifica Post') }}</div>

            <div class="card-body">
              <div class="container py-5">
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
                  @csrf
                  @method('put')

                  <div class="form-group mb-3">
                    <label class="form-label" for="title">Titolo</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ $post->title }}">
                  </div>
                
                  <input class="form-control" type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">

                  <div class="form-group mb-3">
                    <label class="form-label" for="description">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="2">{{$post->description}}</textarea>
                  </div>
                  
                  <div class="form-group mb-3">
                    <label class="form-label" for="body">Contenuto</label>
                    <textarea class="form-control" name="body" id="body" rows="5">{{$post->body}}</textarea>
                  </div>

                  <div class="form-group mb-3">
                    <label class="form-label" for="category_id">Categoria</label>
                    <select class="form-control" name="category_id" id="category_id" aria-label="Default select example">
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}" {{$category->name == $post->category->name ? 'selected' : ''}}>{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group mb-3">
                    <label class="form-label" for="publish_date">Publish date</label>
                    <input class="form-control" type="date" name="publish_date" id="publish_date" value="{{ $post->publish_date }}">
                  </div>
                
                  <input class="btn btn-primary" type="submit" value="Modifica">
                </form>
              </div>                        
            </div>

          </div>
        </div>
      </div>
  </div>    
</div>
@endsection