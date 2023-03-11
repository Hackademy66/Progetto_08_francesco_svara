<x-layout>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <h1>CONTATTACI</h1>
        </div>
        <div class="col-12 col-md-8">
          @if (session()->has('status'))
            <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
              {{ session('status') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          @if (session('emailError'))
            <div class="alert alert-danger alert-dismissible fade show border-start border-end" role="alert">
              {{ session('emailError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form class="p-lg-5 shadow" method="POST" action="{{route('contact-submit')}}">
                @csrf
              <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Inserisci nome">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="message">Messaggio</label>
                <textarea type="text" name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Inserisci qui il testo"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
    </div>
</div>

</x-layout>