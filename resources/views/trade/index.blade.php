<x-layout>
<div class="container-fluid py-5 sale-page">
    <div class="row py-5">
        <div class="col-8 text-center py-5 text-white mx-auto">
            <h1 class="display-1 text-bold py-5">Rent</h1>
            <p>Looking for a decent place to rent? Look no further! Our platform offers you a wide variety of rental properties from fully-furnished apartments to cozy bungalows. We understand that finding the right rental can be stressful, that's why we've made it easy for you. Simply browse through our list of properties and filter them according to your preferences- budget, location, and property type. Our platform also provides detailed information about each rental property including pictures, features, and amenities. Feel free to reach out to us at any time if you require assistance. Let's help you find your perfect rental today!</p>
        </div>
        <div class="col-12 text-center pt-5">
            <a href="#explore-section pt-5">
                <i class="bi bi-chevron-down display-5 text-white animate__animated animate__bounceInDown animate__infinite"></i>
            </a>
        </div>
    </div>
</div>

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

<div class="container-fluid py-5">
    <div class="row py-5">
        @if(count($trades))
            @foreach($trades as $trade)
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <a class="text-decoration-none" href="{{route('trade.show', $trade)}}">
                    <x-card
                        name="{{$trade->name}}"
                        price="{{$trade->price}}"
                        cover="{{$trade->cover}}"
                        description="{{$trade->description}}"
                    />   
                </a> 
            </div>                 
            @endforeach
        @else
            <div class="col-12 ms-5 ps-5">
            Sorry to inform you that there are no houses available for rent at the moment.
            </div>
        @endif
    </div>
</div>

</x-layout>