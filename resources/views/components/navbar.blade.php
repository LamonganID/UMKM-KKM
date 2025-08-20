<div class="navbar bg-base-100 shadow-sm z-50  fixed">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a href="{{ route('welcome') }}" class="{{ request()->routeIs('welcome') ? 'active underline underline-offset-4 decoration-2' : '' }}">Home</a></li>
        <li>
          <a href="{{ route('welcome') }}#profile" class="{{ request()->routeIs('welcome') }}">Profile</a>
        </li>
        <li>
          <a href="{{ route('welcome') }}#visiMisi" class="{{ request()->routeIs('welcome') }}">Visi-Misi</a>
        </li>        
        <li><a href="{{ route('posts.index') }}" class="{{ request()->routeIs('posts.*') ? 'active underline underline-offset-4 decoration-2' : '' }}">Berita</a></li>
        <li><a href="{{ route('albums') }}" class="{{ request()->routeIs('albums') ? 'active underline underline-offset-4 decoration-2' : '' }}">Albums</a></li>
        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active underline underline-offset-4 decoration-2' : '' }}">Contact</a></li>
      </ul>
    </div>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href="{{ route('welcome') }}" class="{{ request()->routeIs('welcome') ? 'active underline underline-offset-4 decoration-2' : '' }}">Home</a></li>
        <li>
          <a href="{{ route('welcome') }}#profile" class="{{ request()->routeIs('welcome')}}">Profile</a>
        </li>      
        <li>
          <a href="{{ route('welcome') }}#visiMisi" class="{{ request()->routeIs('welcome') }}">Visi-Misi</a>
        </li>
      <li><a href="{{ route('posts.index') }}" class="{{ request()->routeIs('posts.*') ? 'active underline underline-offset-4 decoration-2' : '' }}">Berita</a></li>
      <li><a href="{{ route('albums') }}" class="{{ request()->routeIs('albums') ? 'active underline underline-offset-4 decoration-2' : '' }}">Albums</a></li>
      <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active underline underline-offset-4 decoration-2' : '' }}">Contact</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <a class="btn btn-ghost text-xl rounded-lg" href="{{ route('welcome') }}">EXAMPLE.ID</a>
  </div>
</div>
