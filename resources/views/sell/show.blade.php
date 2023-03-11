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
                <a href="{{(route('sell.index'))}}" class="btn btn-primary">torna indietro</a>
            </div>
        </div>
    </div>
</div>

</x-layout>