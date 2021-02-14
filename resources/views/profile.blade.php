@extends('layout/base')

@section('title','Profile')

@section('content')

<div class="container-fluid">
    
    <div class="card" style="width: 18rem;">
      <div class="card-body">
          <h5 class="card-title">{{Auth::user()->name}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{Auth::user()->email}}</h6>
          <a href="{{ url('/') }}" class="card-link">Back</a>
      </div>
    </div>

</div>
    
@endsection