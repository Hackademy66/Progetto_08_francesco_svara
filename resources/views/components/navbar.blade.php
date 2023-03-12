<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top navbar-cs">
  <div class="container-fluid d-flex justify-content-between">
    <a class="navbar-brand" href="{{route('homepage')}}">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navLeft" aria-controls="navLeft" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navRight">
      
    </div>

    <!-- container tendina - nascosto su desktop -->
    <div class="collapse navbar-collapse" id="navLeft">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('trade.index')}}">Lista aste</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('trade.create')}}">Crea Annuncio asta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('sell.index')}}">Lista inserzioni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('sell.create')}}">Crea Annuncio casa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contatti</a>
        </li>
      </ul>
      <div class="collapse navbar-collapse justify-content-end" id="navRight">
            <!-- Sezione a destra della navbar, all'interno di un div separato -->
        <div class="d-flex align-items-center">
          @auth
          <p class="m-0 me-3">{{Auth::user()->name}}</p>
          <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@Csrf</form>
          <button class="btn btn-sm me-3" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</button>
          @else
          <a class="btn btn-sm btn-outline-light me-3 log-btn" href="{{route('register')}}">Registrati</a>
          <a class="btn btn-sm btn-outline-light log-btn" href="{{route('login')}}"><i class="bi bi-person-fill"></i> Login</a>
          @endAuth
        </div>
      </div>

        <!-- ANCHE I BOTTONI LOGIN E REGISTRAZIONE SONO QUI (CI SARÀ UN UNICO CONTAINER PER MOBILE) -->
        @guest
        <ul class="navbar-nav mt-4 mb-4 d-lg-none">
          <li class="nav-item">
            <a class="nav-link btn btn-light w-100 text-center" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-primary w-100 text-center mt-3" href="{{route('register')}}">Registrati</a>
          </li>
        </ul>
        @else
        <ul class="navbar-nav d-none d-lg-block">
          <li class="nav-item">
            <a class="nav-link" href="#">{{Auth::user()->name}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
          </li>
          <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
        </ul>
        @endif
      </ul>
    </div>
  </div>
</nav>
