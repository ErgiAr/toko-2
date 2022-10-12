
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ URL::to('/') }}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ URL::to('/kategori') }}">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('/kontak') }}">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('/about') }}">Tentang Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>