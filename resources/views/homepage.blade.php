@extends('layout.custom')

@section('content')

<div class="flex-center position-ref full-height">
  <div class="content">
      <div class="title m-b-md">
          <img src="/img/vc1.png" alt="laptop" width="220px" height="150px">
          <br>
          This is my Homepage
      </div>
      <img src="/img/img3.png" alt="this is my image" width="100px" height="110px">
      <div>
            <h1>Hi, I am {{$username}}. My user ID = {{$userid}} and My age = {{$age}}.</h1>
      </div>

      @foreach($products as $product)
          @if($product=='table')
              <h4>{{$product}}</h4>
          @elseif($product=='chair')
              <h4>{{$product}}</h4>
          @else
              <h4>This is neither a table nor a chair.</h4>
          @endif
      @endforeach
  </div>
</div>

@endsection
