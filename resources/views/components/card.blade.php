<div class="main-pro" style="box-shadow: 5px 5px 5px #ddd">   
    <img class="img-fluid" src="{{Storage::url($cover)}}" style="max-width: 100%; height: 18rem;" alt=""> 
    <div class="ms-4 p-3 bg-white"> 
        <h3 class="mt-4 text-bold">{{$price}} €</h3> 
        <p class="mb-0">Apartment for Sale</p> 
        <p class="mb-1">{{$name}}</p> 
        <p class="">{{ $description }}</p> 
    </div> 
    <button class="btn btn-outline-primary ms-4 mb-5" type="submit">Visualizza</button>
</div> 