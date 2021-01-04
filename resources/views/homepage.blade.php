{{-- Extends main layout --}}
@extends('layouts.main')

@section('main-content')
    <main class="main-section">
        <div class="container">
            {{-- Pasta Lunga --}}
            @include('partials.pasta-type-section', ['type' => $lunghe, 'title' => 'LE LUNGHE'])
            {{-- Pasta Corta --}}
            @include('partials.pasta-type-section', ['type' => $corte, 'title' => 'LE CORTE'])
            {{-- Pasta Cortissima --}}
            @include('partials.pasta-type-section', ['type' => $cortissime, 'title' => 'LE CORTISSIME'])
        </div>
    </main>
@endsection
