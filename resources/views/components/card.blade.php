<div class="main-pro bg-white shadow-card">   
    <img class="img-fluid img-card" src="{{Storage::url($cover)}}" alt=""> 
    <div class="ms-4 p-3 bg-white text-black body-card"> 
        <h3 class="mt-4 text-bold">{{$name}}</h3>  
        <p class="mb-1 text-bold text-italic">{{$price}} €</p> 
        <p class="text-italic">{{ $description }}</p> 
    </div> 
    <button class="btn btn-outline-dark ms-4 mb-5" type="submit">Read More...</button>
</div> 