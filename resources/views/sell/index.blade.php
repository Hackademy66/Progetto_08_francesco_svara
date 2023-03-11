<x-layout>

<h1>INDEX VENDITE</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session()->has('sellUpdated'))
              <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
                {{ session('sellUpdated') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @if(count($sells))
        @foreach($sells as $sell)
        <div class="col-12 col-md-3">
            <img src="{{Storage::url($sell->cover)}}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{$sell->name}}</h5>
                <p class="card-text">{{$sell->price}}</p>
                <p class="card-text">{{$sell->description}}</p>
                <a href="{{route('sell.show', compact('sell'))}}" class="btn btn-primary">clicca</a>
                <a href="{{route('sell.edit', compact('sell'))}}" class="btn btn-warning">modifica</a>
                <form action="{{route('sell.destroy', compact('sell'))}}" method="POST">
                    @Csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
        @endforeach
        @else
        <div class="col-12">
            Non sono ancora state inserite case
        </div>
        @endif
    </div>
</div>

</x-layout>