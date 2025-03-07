<nav class="navbar navbar-expand-lg bg-body-tertiary sticky sticky-top p-0">
    <div class="container-fluid">
      <a class="navbar-brand py-0" href="#"><i class="bi bi-camera-fill fs-2 p-0 0"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link py-0 {{Route::currentRouteName()=="home" ? "fw-bold text-danger":""}}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link py-0 {{Route::currentRouteName()=="anime" ? "fw-bold text-danger":""}}" href="{{route('anime')}}">Animes</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link py-0 {{Route::currentRouteName()=="article.create" ? "fw-bold text-danger":""}}" href="{{route('article.create')}}">Marketplace</a>
          </li>
          <li class="nav-item">
            <a class="nav-link py-0 {{Route::currentRouteName()=="home" ? "":""}}" href="">Contact Us</a>
          </li>
      
   
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>