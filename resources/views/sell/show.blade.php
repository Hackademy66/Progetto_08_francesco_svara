<x-layout>

<h1>CARTA SINGOLA</h1>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <img src="{{Storage::url($sell->cover)}}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{$sell->name}}</h5>
                <p class="card-text">{{$sell->price}}</p>
                <p class="card-text">{{$sell->description}}</p>
                <div class="mt-3">
                <a href="{{(route('sell.index'))}}" class="btn btn-primary">torna indietro</a>
                <a href="{{ route('sell.edit', $sell) }}" class="btn btn-outline-dark">Modifica</a>
                <form action="{{ route('sell.destroy', $sell) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger">Elimina</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

</x-layout>