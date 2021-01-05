<nav class="navbar" id="navbar">
  <div class="container">
    {{-- dropdown menu --}}
    <span class="dropdown" v-on:click="toggleMenu">
      <i v-if="visible" class="fas fa-times"></i>
      <i v-else class="fas fa-bars"></i>
    </span>
    {{-- menu --}}
    <ul class="menu flex jc-center" :class="{visible: visible}">
      <li><a href="/">Home</a></li>
      <li><a href="{{ route('product', $id), }}">Prodotti</a></li>
      <li><a href="{{ route('news') }}">News</a></li>
    </ul>
  </div>
</nav>