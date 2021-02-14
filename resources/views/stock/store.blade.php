@extends('layout/baseadmin')

@section('title','Daftar Stock')

@section('pageS','active')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Add Stock</h4>
            <p class="card-category">Adding new stock</p>
          </div>
          <div class="card-body">

            <form method="POST" action="{{ url('/stock/add') }}" enctype="multipart/form-data">
            @csrf
              <div class="row my-4">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    @error('name')
                      {{ $message }}
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Price</label>
                    <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                    @error('price')
                      {{ $message }}
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row my-4">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Description</label>
                    <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                      @error('description')
                        {{ $message }}
                      @enderror
                  </div>
                </div>
              </div>
              <div class="row my-4">
                <div class="col-md-4">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" name="image" value="{{ old('image') }}">
                    <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Category Name</label>
                    <input type="text" class="form-control" name="categoryName" value="{{ old('category') }}">
                    @error('categoryName')
                      {{ $message }}
                    @enderror
                  </div>
                </div>
              </div>
                    <button type="submit" class="btn btn-primary pull-left">Add Stock</button>
                    <div class="clearfix"></div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection