@extends('layout.custom')

@section('content')

<div class="flex-center position-ref full-height">
  <div class="content">
      <div class="title m-b-md">
          <img src="/img/vc1.png" alt="laptop" width="220px" height="150px">
          <br>
          This is my Homepage
      </div>

      <!-- var pass -->
      <!-- <h1>{{$name}}</h1> -->

      <!-- For each loop -->
      <!-- @foreach($products as $product)
         <h1>{{$product}}</h1>
      @endforeach -->

      <!-- For loop -->
      <!-- @for($i=0; $i<3; $i++)
          <h1>{{$products[$i]}}</h1>
      @endfor -->

      @foreach($products as $product)
          @if($product=='table')
              <h1>{{$product}}</h1>
          @elseif($product=='chair')
              <h1>{{$product}}</h1>
          @else
              <h1>This is neither a table nor a chair.</h1>
          @endif
      @endforeach
  </div>
</div>

@endsection
