@extends('layouts/myapp')

@section('content')

@include('profile/partials/header') 
 
<div>
        @foreach ($images as $image)
        <div> <img class="w-96 h-64" src=" {{ Storage::url($image->path) }} " alt=""> </div>  <br>
        <div class="border-2 rounded-full px-3 font-bold ml-16 w-40 h-8 bg-blue-400 text-white text-2xl"> {{$image->price}}fcfa </div> <br>
        <div class="border-2 rounded-full mb-8 w-44 h-8 px-3 bg-blue-400 font-semibold text-white">
             <form action="{{route('Cart.store')}}" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="{{$image->id}}">
                  <input type="hidden" name="name" value="{{$image->name}}">
                  <input type="hidden" name="price" value="{{$image->price}}">
                   <button type="submit"> Ajouter au panier  </button> 
             </form>
        </div>
        @endforeach

</div>



@endsection