<x-layout>

<h1>INDEX ASTE</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session()->has('tradeUpdated'))
              <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
                {{ session('tradeUpdated') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @if(count($trades))
        @foreach($trades as $trade)
        <div class="col-12 col-md-3">
            <img src="{{Storage::url($trade->cover)}}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{$trade->name}}</h5>
                <p class="card-text">{{$trade->price}}</p>
                <p class="card-text">{{$trade->description}}</p>
                <a href="{{route('trade.show', compact('trade'))}}" class="btn btn-primary">clicca</a>
                <a href="{{route('trade.edit', compact('trade'))}}" class="btn btn-warning">modifica</a>
                <form action="{{route('trade.destroy', compact('trade'))}}" method="POST">
                    @Csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
        @endforeach
        @else
        <div class="col-12">
            Non sono ancora state inserite aste
        </div>
        @endif
    </div>
</div>

</x-layout>