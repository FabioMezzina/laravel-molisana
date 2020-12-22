{{-- Extends main layout --}}
@extends('layouts.main')

@section('main-content')
    {{-- Pasta lunga --}}
    @if(! empty($lunghe))
    <h2>LE LUNGHE</h2>
        <div class="flex f-wrap">
            @foreach($lunghe as $pasta)
                <div class="wrapper-pasta">
                    <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                    <p class="name">{{ $pasta['titolo'] }}</p>
                    <a href="#">More info</a>
                </div>
            @endforeach
        </div>
    @endif
    
    {{-- Pasta Corta --}}
    @if(! empty($corte))
    <h2>LE CORTE</h2>
        <div class="flex f-wrap">
            @foreach($corte as $pasta)
                <div class="wrapper-pasta">
                    <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                    <p class="name">{{ $pasta['titolo'] }}</p>
                    <a href="#">More info</a>
                </div>
            @endforeach
        </div>
    @endif

    {{-- Pasta Cortissima --}}
    @if(! empty($cortissime))
    <h2>LE CORTISSIME</h2>
        <div class="flex f-wrap">
            @foreach($cortissime as $pasta)
                <div class="wrapper-pasta">
                    <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                    <p class="name">{{ $pasta['titolo'] }}</p>
                    <a href="#">More info</a>
                </div>
            @endforeach
        </div>
    @endif
@endsection

