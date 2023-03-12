<x-layout>

<h1>CARTA SINGOLA</h1>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <img src="{{Storage::url($trade->cover)}}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{$trade->name}}</h5>
                <p class="card-text">{{$trade->price}}</p>
                <p class="card-text">{{$trade->description}}</p>
                <a href="{{(route('trade.index'))}}" class="btn btn-primary">torna indietro</a>
                <a href="{{ route('trade.edit', $trade) }}" class="btn btn-outline-dark">Modifica</a>
                <form action="{{ route('trade.destroy', $trade) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger">Elimina</button>
                </form>
            </div>
        </div>
    </div>
</div>

</x-layout>