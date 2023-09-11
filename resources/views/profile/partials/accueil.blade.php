@extends('layouts/myapp')

@section('content')

@include('profile/partials/header') 


     
<div>

<div class="flex py-8 px-16 ">
       
    <div class="border-2 rounded-lg w-72 h-92 m-8">
           <div class="py-6 items-stretch justify-center">  <img class="w-72 h-48" src=" {{ Storage::url('$image->path') }} " alt=""> </div> 
           <div class="border-2 rounded-full px-3 font-bold ml-16 w-40 h-8 bg-blue-400 text-white text-2xl"> {{$image->prix}}fcfa </div>
           <div class="font-bold text-2xl max-w-lg ml-20"> {{$image->name}} </div>
            <a href=""  class="font-bold text-2xl max-w-lg ml-2" >  Sac de bonne qualité  </a>
     </div>
    
   </div>


</div>

@endsection
    
