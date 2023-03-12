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

<div class="container-fluid">
    <div class="row">
        @if(count($sells))
            @foreach($sells as $sell)
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <a href="{{ route('sell.show', $sell) }}">
                    <x-card
                        name="{{ $sell->name }}"
                        price="{{ $sell->price }}"
                        cover="{{ $sell->cover }}"
                        description="{{ $sell->description }}"
                    />   
                </a> 
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