@extends('layout/base')

@section('title',"Store - $stock->name")

@section('content')

<div class="container">

  <div class="row mt-2 contDetail">
    <div class="col-4 offset-md-2 mr-4 mb-4 headerStock float-left">
      <div class="cardCatalogStock">
        <img src='{!! asset("assets/img/$stock->image") !!}' class="card-img-top" alt=""></img>
      </div>
    </div>

    <div class="col-4 mx-4 ">
      <div class="boxProductDetail">
        <div class="nameProductStock text-left"><h1>{{ $stock->name }}</h1></div>
        <div class="detailProduk text-left">{{$stock->description}}</div>
      </div>
    

      @if($stock->status == 1)
      <form method="POST" action="{{ url('cart') }}/{{$stock->id}}" class="float-left mx-2">
        @csrf
        <input class="btn btn-outline-success btn-sm cartbox" type="submit" value="Add Cart"></input>
      </form>
      <form method="POST" action="" class="mx-2">
        @csrf
        <input class="btn btn-outline-secondary btn-sm cartbox" type="submit" value="Buy"></input>
      </form>
      @endif
    </div>
  </div>

</div>

    
@endsection