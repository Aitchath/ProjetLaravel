@extends('layouts/myapp')

@section('content')

       @include('profile/partials/header') 
 

     
              <div>

              <div class="flex py-8 px-6">
                     @foreach ($images as $image)
                     <div class="border-2 rounded-lg w-64 h-92 m-4">
                     <div class="py-6 items-stretch justify-center"> <a href="{{ route('Commerce.image') }}"> <img class="w-64 h-48" src=" {{ Storage::url($image->path) }} " alt=""> </a> </div> 
                     <div class="border-2 rounded-full px-3 font-bold ml-16 w-40 h-8 bg-blue-400 text-white text-2xl"> {{$image->price}}fcfa </div>
                     <div class="font-bold text-2xl max-w-lg ml-20"> {{$image->name}} </div>
                     <a href=""  class="font-bold text-2xl max-w-lg ml-2" >  Sac de bonne qualité  </a>
              </div>
                     @endforeach
              </div>


              </div>


@endsection