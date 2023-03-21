<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('create')}}">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('index')}}">Elenco Prodotti</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Log/in Register
          </a>
          <ul class="dropdown-menu">
            @Guest
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>

            <li><a class="dropdown-item" href="{{route('index')}}">Elenco Prodotti</a></li>
            <li><hr class="dropdown-divider"></li>
            @Auth
            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Log-Out</a></li>

            @endguest
            <form id="form-logut" method="POST" action="{{route('logout')}}" @csrf ></form>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul>
      @Auth
       <li> Ciao, {{Auth::user()->name}} </li>
      
      @Else

        <li> Ciao, Accedi </li>

      @endauth

      </ul>
    </div>
  </div>
</nav>