@extends('layout/base')

@section('title', 'Catalog')


@section('content')

<div class="container">
  <div class="textTopCatalog">
    <h1 class="text-center textTopCatalog my-4">
        CATALOG
    </h1>
  </div>

  @if (session('status'))
  <div class="d-flex justify-content-center">
    <div class="alert alert-success alert-dismissible fade show Acart" role="alert">
    {{ session('status') }}
      <button type="button" class="close mb-1" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
  @endif

    <div class="row row-cols-1 row-cols-md-4 mt-2">
        @foreach ($stocks as $stock)
        <form method="POST" action="{{ url('carts') }}/{{$stock->id}}">
          @csrf
        <div class="col mb-4">
          <div class="card cardCatalog">
            <img src='{!! asset("assets/img/$stock->image") !!}' class="card-img-top" alt="...">
          </div>
            <div class="card-body text-center">

              @if($stock->status == 1)
                <div class="nameProduct "><a href="{{ url('catalog/detail') }}/{{$stock->id}}">{{ $stock->name }}</a></div>
              @else
                <div class="nameProduct "><a>{{ $stock->name }}</a></div>
              @endif
              <div class="priceIndexCatalog mt-2">
                <p>Rp.{{ number_format($stock->price) }}

                  @if($stock->status == 1)
                    <input class="btn btn-outline-success btn-sm cartbox" type="submit" value="Add Cart">
                  @else
                    <span class="badge badge-pill badge-warning">SOLD</span>
                  @endif

                </p>
              </div>
            </div>
        </div>
        </form>
        @endforeach
    </div>
    
</div>


@endsection