@extends('layout/baseadmin')

@section('title','Daftar Stock')

@section('pageS','active')

@section('content')
<div class="container mt-4">
  <form class="navbar-form float-left offset-7" method="GET" action="{{  url('/admin/stock') }}">
    <div class="input-group no-border">
        <input type="text" value="" class="form-control" placeholder="Search..." name="find">
        <button type="submit" class="btn btn-white btn-round btn-just-icon">
          <i class="material-icons">search</i>
          <div class="ripple-container"></div>
        </button>
    </div>
  </form>
  
  <a href="/stock/store" class="btn btn-primary ml-3">Add Stock</a>
</div>


<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Stock List</h4>
            <p class="card-category">This is list from stock</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @foreach ($stocks as $stock)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ ucfirst($stock->name) }}</td>
                    <td>{{ ucfirst($stock->categoryName) }}</td>
                    <td>Rp.{{ number_format($stock->price) }}</td>

                    @if($stock->status == 1)
                      <td>Available</td>
                    @else
                      <td>Sold</td>
                    @endif
                    
                    <td>
                      <form method="POST" action="{{ url('/stock') }}/{{$stock->id}}" class="float-left mr-1">
                        @csrf
                        @method('put')
                        <button type="submit" class="btn btn-sm btn-primary btnB">
                          @if($stock->status == 1)
                          Set to Sold
                          @else
                          Set to Available
                          @endif
                        </button>
                      </form>
                      <form method="POST" action="{{ url('stock') }}/{{$stock->id}}">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete">
                          Delete
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