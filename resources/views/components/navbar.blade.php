<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top navbar-cs">
  <div class="container-fluid d-flex justify-content-between">
    <a class="navbar-brand ms-4" href="{{route('homepage')}}">Logo</a>
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
          <a class="nav-link active" aria-current="page" href="{{route('trade.index')}}">Rent List</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('trade.create')}}">Create Rent</a>
        </li>
        @endauth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('sell.index')}}">Sale List</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('sell.create')}}">Create Sale</a>
        </li>
        @endauth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('contact')}}">Contact</a>
        </li>
      </ul>
        <div class="collapse navbar-collapse justify-content-end" id="navRight">
              <!-- Sezione a destra della navbar, all'interno di un div separato -->
          <div class="d-flex align-items-center">
            @auth
            <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@Csrf</form>
            <button id="btn-login" class="btn btn-sm btn-outline-light me-3 log-btn" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</button>
            @else
            <a id="btn-sign-up" class="btn btn-sm btn-outline-light me-3 log-btn" href="{{route('register')}}">Registrati</a>
            <a id="btn-login" class="btn btn-sm btn-outline-light log-btn" href="{{route('login')}}"><i class="bi bi-person-fill"></i> Login</a>
            @endAuth
          </div>
        </div>
      </ul>
    </div>
  </div>
</nav>
