<x-layout>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <h1>Modifica Asta</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form class="p-lg-5 shadow" method="POST" action="{{route('trade.update', compact('trade'))}}" enctype="multipart/form-data">
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
                    <input type="text" name="name" class="form-control" id="name" placeholder="Inserire titolo" value="{{$trade->name}}">
                </div>
                <div class="form-group">
                    <label for="price">Prezzo</label>
                    <input type="double" name="price" class="form-control" id="price" placeholder="Inserire prezzo" value="{{$trade->price}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3" value="">{{$trade->description}}</textarea>
                </div>
                <div class="mb-3">
                            <label for="existingCover" class="form-label fontor fs-3"> Immagine attuale</label>
                            <img src="{{Storage::url($trade->cover)}}" width="100%" alt="">
                        </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Inserisci l'immagine</label>
                    <input class="form-control" name="cover" type="file" id="cover">
                </div>
                <button type="submit" class="btn btn-primary">Modifica</button>
                <button href="{{route('trade.index')}}" type="submit" class="btn btn-primary">Torna Indietro</button>
            </form>
        </div>
    </div>
</div>


</x-layout>