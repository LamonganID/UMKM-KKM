<div class="navbar bg-base-100 shadow-sm justify-center">
      <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <h1>Lorem</h1>
      </div>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
        <li><a href="{{ route('welcome') }}">Home</a></li>
        <li><a href="#profile">Profile</a></li>
        <li><a href="#visiMisi">Visi-Misi</a></li>
        <li><a href="{{ route('posts.index') }}">Berita</a></li>
        <li><a href="{{ route('albums') }}">Albums</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost text-xl" href="{{ route('welcome') }}">Bandar Kedungmulyo</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href="{{ route('welcome') }}">Home</a></li>
      <li><a href="#profile">Profile</a></li>
      <li><a href="#visiMisi">Visi-Misi</a></li>
      <li><a href="{{ route('posts.index') }}">Berita</a></li>
      <li><a href="{{ route('albums') }}">Albums</a></li>
      <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
  </div>

</div>
