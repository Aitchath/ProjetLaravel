@extends('header')

@section('content')
 
@auth
 <div class="flex flex-row">

     <div class="flex-1">
         <img src="{{asset('images/image7.webp')}}" alt="">
         <button>
             Ajouter au produit
         </button>
     </div>
     <div class="flex-1">
         <img src="{{asset('images/image10.webp')}}" alt="">  
         <button>
             Ajouter au produit
         </button>
     </div>
     <div class="flex-1"> 
         <img src="{{asset('images/image11.webp')}}" alt="">
         <button>
             Ajouter au produit
         </button>
     </div>
     <div class="flex-1"> 
         <img src="{{asset('images/image3.jpg')}}" alt="">
         <button>
             Ajouter au produit
         </button>
     </div>
     <div class="flex-1">
        <img src="{{asset('images/image9.jpg')}}" alt="">
        <button>
            Ajouter au produit
        </button>
    </div>
 </div>

 <div>
    
    <div>
        <img src="{{asset('images/image6.jpg')}}" alt="">
        <button>
            Ajouter au produit
        </button>
    </div>
    <div>
        <img src="{{asset('images/image15.webp')}}" alt="">
        <button>
            Ajouter au produit
        </button>
    </div>
    <div>
        <img src="{{asset('images/image16.webp')}}" alt="">
        <button>
            Ajouter au produit
        </button>
    </div>
    <div>
        <img src="{{asset('images/image17.webp')}}" alt="">
        <button>
            Ajouter au produit
        </button>
    </div>
    <div>
        <img src="{{asset('images/image18.jpg')}}" alt="">
        <button>
            Ajouter au produit
        </button>
    </div>
</div>
    

@endauth

@endsection