@if(! empty($type))
<section>
  <h2>{{ $title }}</h2>
  <div class="flex f-wrap">
    @foreach($type as $pasta)
      <div class="wrapper-pasta">
        <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
        <p class="name">{{ $pasta['titolo'] }}</p>
        <a href="#">More info</a>
      </div>
    @endforeach
  </div>
</section>
@endif