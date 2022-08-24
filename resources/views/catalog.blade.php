@extends('layouts.app')

@section('content')
  <div class="header"><h1>Шапка</h1></div>
  <div class="content">
    <div class="right_memu">Меню <br> справа</div>
    <table id="products" class="table">
      <thead>
          <tr>
              <th>image</th>
              <th>Product Name</th>
              <th>Price / Currency</th>
              <th></th>
          </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
          <tr>
            <td><img src="{{ asset('images/tmp/' . $product->image) }}" ></td>
            <td>{{ $product->title }}</td>
            <td>@if($product->price) {{ number_format($product->price, 2, ',', ' ') }} {{ $product->currency }} @else '' @endif</td>
            <td><button class="btn button button-buy">Купить</button></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="pagination">
    @include('layouts.pagination')
  </div>
  <div class="footer">Футер</div>
@endsection
