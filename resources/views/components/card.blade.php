<div class="main-pro bg-white shadow-card">   
    <img class="img-fluid img-card" src="{{Storage::url($cover)}}" alt=""> 
    <div class="ms-4 p-3 bg-white text-black "> 
        <h3 class="mt-4 text-bold">{{$price}} €</h3> 
        <p class="mb-0">Apartment for Sale</p> 
        <p class="mb-1">{{$name}}</p> 
        <p class="">{{ $description }}</p> 
    </div> 
    <button class="btn btn-outline-primary ms-4 mb-5" type="submit">Visualizza</button>
</div> 