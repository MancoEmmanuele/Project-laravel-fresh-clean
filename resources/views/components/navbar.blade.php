<nav class="navbar navbar-expand-lg bg-body-tertiary sticky sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="bi bi-camera-fill fs-2 p-0 0"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link  {{Route::currentRouteName()=="home" ? "fw-bold":""}}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{Route::currentRouteName()=="anime" ? "fw-bold":""}}" href="{{route('anime')}}">Animes</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link  {{Route::currentRouteName()=="home" ? "":""}}" href="">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{Route::currentRouteName()=="home" ? "":""}}" href="">Contact Us</a>
          </li> --}}
      
   
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>