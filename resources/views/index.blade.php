
@extends('layout/base')

@section('title', 'Halaman Home')


@section('content')

<div class="headerImageIndex">
        <h2>Discover</h2>
        <p><span>your</span> Fashion.</p>
</div>

<div class="borderIndexHeader">
    <img src="{!! asset('assets/img/headerPage.jpg') !!}" class="img-fluid imgIndexHeader" alt="">
</div>

<div class="textBottomHome">
    <h1 class="text-center"> Product </h1>
</div>

@endsection
