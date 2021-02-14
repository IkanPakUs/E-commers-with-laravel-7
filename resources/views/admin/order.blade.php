@extends('layout/baseadmin')

@section('title','Daftar Stock')

@section('pageO','active')

@section('content')

<div class="container mt-4">
  <form class="navbar-form offset-7" method="GET" action="{{ url('/admin/order') }}" >
    <div class="input-group no-border">
      <input type="text" value="" class="form-control" placeholder="Search..." name="find">
      <button type="submit" class="btn btn-white btn-round btn-just-icon">
        <i class="material-icons">search</i>
        <div class="ripple-container"></div>
      </button>
    </div>
  </form>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Order List</h4> 
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Order name</th>
                  <th>Qty.</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @foreach ($orders as $order)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ ucfirst($order->user) }}</td>
                    <td>{{ ucfirst($order->name) }}</td>
                    <td>{{ $order->value }}</td>
                    <td>{{ number_format($order->price) }}</td>

                    @if($order->status == 1)
                      <td>Completly</td>
                    @else
                      <td>not paid</td>
                    @endif
                    
                    <td>
                      <form method="POST" action="{{ url('/order') }}/{{$order->id}}">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete">
                          cancel
                        </button>
                      </form>
                    </td>
                  </tr>
                </form>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection