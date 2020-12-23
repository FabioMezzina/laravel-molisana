@extends('layouts.main')

@section('main-content')
{{-- CTA NAVIGATION --}}
@if($id > 0)
  <a href="{{ route('product', $id - 1) }}">PREV</a>
@endif
@if($id < $length)
  <a href="{{ route('product', $id + 1) }}">NEXT</a>
@endif

{{-- PRODUCT DETAILS --}}
<section class="product">
  <img src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
  <img src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
  <p>{{ $product['descrizione'] }}</p>
</section>
@endsection