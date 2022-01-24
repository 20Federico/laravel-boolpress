@extends('layouts.admin')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">

      <div class="col-md-10">
        <div class="card">
          <div class="card-header">{{ __('Utenti') }}</div>

            <div class="card-body">
                  
                  <ul class="list-group">
                    @foreach ($users as $user)
                    <li class="list-group-item">{{$user->name}} - {{$user->email}}</li>
                    @endforeach
                  </ul>
                
            </div>
          </div>
        </div>
      </div>
  </div>    
</div>
@endsection