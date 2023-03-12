<x-layout>

<div class="sale-create text-white">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 text-center">
            <h1>Crea nuovo annuncio casa</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form class="p-lg-5 shadow" method="POST" action="{{route('sell.store')}}" enctype="multipart/form-data">
                @if($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="name">Titolo inserzione</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Inserire titolo">
                </div>
                <div class="form-group">
                    <label for="price">Prezzo</label>
                    <input type="double" name="price" class="form-control" id="price" placeholder="Inserire prezzo">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Inserisci l'immagine</label>
                    <input class="form-control" name="cover" type="file" id="cover">
                </div>
                <button type="submit" class="btn btn-light">Invia</button>
            </form>
            <div class="row justify-content-center text-center pt-5">
            <form action="{{route('sell.index')}}">
                <button type="submit" class="btn btn-outline-light">Torna Indietro</button>
            </form>
            </div>
        </div>
    </div>
</div>
</div>

</x-layout>