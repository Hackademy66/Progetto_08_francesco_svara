<x-layout>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <h1>Modifica Annuncio</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form class="p-lg-5 shadow" method="POST" action="{{route('sell.update', compact('sell'))}}" enctype="multipart/form-data">
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
                @method('put')
                <div class="form-group">
                    <label for="name" >Titolo inserzione</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Inserire titolo" value="{{$sell->name}}">
                </div>
                <div class="form-group">
                    <label for="price">Prezzo</label>
                    <input type="double" name="price" class="form-control" id="price" placeholder="Inserire prezzo" value="{{$sell->price}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3" value="">{{$sell->description}}</textarea>
                </div>
                <div class="mb-3">
                            <label for="existingCover" class="form-label fontor fs-3"> Immagine attuale</label>
                            <img src="{{Storage::url($sell->cover)}}" width="100%" alt="">
                        </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Inserisci l'immagine</label>
                    <input class="form-control" name="cover" type="file" id="cover">
                </div>
            </form>
            <div class="text-center mt-3">
                <form method="" action="{{route('sell.index')}}">
                    <button type="submit" class="btn btn-primary my-2 mr-2">Torna Indietro</button>
                </form>
                <form method="POST" action="{{route('sell.update', compact('sell'))}}" enctype="multipart/form-data">
                    <button type="submit" class="btn btn-primary my-2 ml-2">Modifica</button>
                </form>
            </div>
            
        </div>
    </div>
</div>

</x-layout>