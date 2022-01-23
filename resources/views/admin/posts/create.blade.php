@extends('layouts.admin')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">

      <div class="col-md-10">
        <div class="card">
          <div class="card-header">{{ __('Crea Post') }}</div>

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
                <form action="{{ route('admin.posts.store') }}" method="post">
                  @csrf
                  <div class="form-group mb-3">
                    <label class="form-label" for="title">Titolo</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                  </div>
                
                  <div class="form-group mb-3">
                    <label class="form-label" for="author">Autore</label>
                    <input class="form-control" type="text" name="author" id="author" value="{{ old('author') }}">
                  </div>

                  <div class="form-group mb-3">
                    <label class="form-label" for="description">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="2">{{old('description')}}</textarea>
                  </div>
                  
                  <div class="form-group mb-3">
                    <label class="form-label" for="body">Contenuto</label>
                    <textarea class="form-control" name="body" id="body" rows="5">{{old('body')}}</textarea>
                  </div>

                  <div class="form-group mb-3">
                    <label class="form-label" for="publish_date">Publish date</label>
                    <input class="form-control" type="date" name="publish_date" id="publish_date" value="{{ old('publish_date') }}">
                  </div>
                
                  <input type="submit" value="Invia">
                </form>
              </div>                        
            </div>

          </div>
        </div>
      </div>
  </div>    
</div>
@endsection