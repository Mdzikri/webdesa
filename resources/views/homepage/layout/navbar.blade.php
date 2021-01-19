<nav class="navbar navbar-expand-lg navbar-dark bg-secondary sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="/">Desa </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-1" aria-controls="navbarNavDropdown-1"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarNavDropdown-1">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/artikel">Artikel</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#a" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Profil
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{route('sejarah')}}">Sejarah Desa</a>
            <a class="dropdown-item" href="/profile/lokasi">Lokasi Desa</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#a" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Pemerintahan
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/visimisi">Visi & Misi </a>
            <a class="dropdown-item" href="/perangkat">Perangkat Desa</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/lembaga">Lembaga Desa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/data">Data Desa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>