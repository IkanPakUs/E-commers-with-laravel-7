@extends('layout/base')

@section('title','Cart')

@section('content')



<div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Qty.</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($stock as $cart)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{$cart->name}}</td>
          <td>Rp.{{ number_format($cart->price) }}</td>
          <td>{{$cart->value}}</td>
          <td>
            <form method="POST" action="{{ url('carts') }}/{{$cart->id}}">
              @csrf
              @method('delete')
                <button type="submit" class="btn badge badge-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
</div>
    
@endsection