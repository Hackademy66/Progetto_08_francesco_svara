<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top navbar-cs">
<div class="container-fluid d-flex justify-content-between">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
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
        @Auth
        <li class="nav-item">
          <a class="nav-link" href="#">{{Auth::user()->name}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
        </li>
        <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none nav-link">@Csrf</form>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}"><i class="bi bi-person-fill""></i> Login</a>
        </li>
        @endAuth
      </ul>
    </div>
  </div>
</nav>