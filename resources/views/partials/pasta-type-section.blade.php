@if(! empty($type))
<section>
  <h2>{{ $title }}</h2>
  <div class="flex f-wrap">
    @foreach($type as $pasta)
      <div class="wrapper-pasta">
        <a href="{{ route('product', $pasta['id']) }}"><img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}"></a>
      </div>
    @endforeach
  </div>
</section>
@endif