<nav class="navbar" id="navbar">
  <div class="container">
    {{-- dropdown menu --}}
    <span class="dropdown" v-on:click="toggleMenu">
      <i v-if="visible" class="fas fa-times"></i>
      <i v-else class="fas fa-bars"></i>
    </span>
    {{-- menu --}}
    <ul class="menu flex jc-center" :class="{visible: visible}">
      <li class="{{ Request::path() === '/' ? 'current-active' : '' }}">
        <a href="/">Home</a>
      </li>
      <li class="{{ Request::is('product/*') ? 'current-active' : '' }}">
        <a href="{{ route('product', $id), }}">Prodotti</a>
      </li>
      <li class="{{ Request::path() === 'news' ? 'current-active' : '' }}">
        <a href="{{ route('news') }}">News</a>
      </li>
    </ul>
  </div>
</nav>