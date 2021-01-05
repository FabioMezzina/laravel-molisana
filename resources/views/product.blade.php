@extends('layouts.main')

@section('main-content')
  <main class="main-section prod">
    <div class="container">
      {{-- PRODUCT DETAILS --}}
      <section class="product">
          {{-- CTA NAVIGATION --}}
          @if($id > 0)
            <a class="prev" href="{{ route('product', $id - 1) }}">
              <i class="fas fa-chevron-left"></i>
            </a>
          @endif
          @if($id < $length)
            <a class="next" href="{{ route('product', $id + 1) }}">
              <i class="fas fa-chevron-right"></i>
            </a>
          @endif
          <img src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
          <img src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
          <div class="description">{!! $product['descrizione'] !!}</div>
        </section>
    </div>
  </main>
@endsection