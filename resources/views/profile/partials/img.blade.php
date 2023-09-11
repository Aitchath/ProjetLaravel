
<div class="flex py-8 px-16 ">
     <div class="border-2 rounded-lg w-72 h-92 m-8">
            <div class="py-6 items-stretch justify-center">  <img class="w-72 h-48 z-0" src=" {{ asset('images/image8.webp')}} " alt=""> </div> 
            <div class="border-2 rounded-full px-3 font-bold ml-24  w-40 h-8 z-20 bg-blue-400 text-white text-2xl"> 15000 fcfa </div>
            <a href=""  class="font-bold text-2xl max-w-lg ml-2" >  Sac de bonne qualité  </a>
     </div>               
     <div class="border-2 rounded-lg w-72 h-92 m-8">
            <div class="py-6 items-stretch justify-center">  <img class="w-72 h-48" src=" {{ asset('images/image9.jpg')}} " alt=""> </div>
            <div class="border-2 rounded-full px-3 font-bold ml-24  w-40 h-8 z-20 bg-blue-400 text-white text-2xl"> 10000 fcfa </div>
            <a href=""  class="font-bold text-2xl max-w-lg ml-2" >  Sac de bonne qualité  </a>
     </div>               
     <div class="border-2 rounded-lg w-72 h-92 m-8">
            <div class="py-6 items-stretch justify-center">  <img class="w-72 h-48" src=" {{ asset('images/image9.png')}} " alt=""> </div> 
            <div class="border-2 rounded-full px-3 font-bold ml-24  w-40 h-8 z-20 bg-blue-400 text-white text-2xl"> 8000 fcfa </div>
            <a href=""  class="font-bold text-2xl max-w-lg ml-2" >  Sac de bonne qualité  </a>
     </div>               
     <div class="border-2 rounded-lg w-72 h-92 m-8">
            <div class="py-6 items-stretch justify-center">  <img class="w-72 h-48" src=" {{ asset('images/image10.webp')}} " alt=""> </div>
            <div class="border-2 rounded-full px-3 font-bold ml-24  w-40 h-8 z-20 bg-blue-400 text-white text-2xl"> 14000 fcfa </div>
            <a href=""  class="font-bold text-2xl max-w-lg ml-2" >  Sac de bonne qualité  </a>
     </div>  
     
     <div class="border-2 rounded-lg w-72 h-92 m-8">
            <div class="py-6 items-stretch justify-center">  <img class="w-72 h-48" src=" {{ asset('images/image11.webp')}} " alt=""> </div> 
            <div class="border-2 rounded-full px-3 font-bold ml-24  w-40 h-8 z-20 bg-blue-400 text-white text-2xl"> 5500 fcfa </div>
            <a href=""  class="font-bold text-2xl max-w-lg ml-2" >  Sac de bonne qualité  </a>
     </div> 

     <div class="border-2 rounded-lg w-72 h-92 m-8">
            <div class="py-6 items-stretch justify-center">  <img class="w-72 h-48" src=" {{ asset('images/image12.webp')}} " alt=""> </div>
            <div class="border-2 rounded-full px-3 font-bold ml-24  w-40 h-8 z-20 bg-blue-400 text-white text-2xl"> 12000 fcfa </div>
            <a href=""  class="font-bold text-2xl max-w-lg ml-2" >  Sac de bonne qualité  </a>
     </div>              
</div>


<form action="{{ route('cart.store') }}" method="POST">
            @csrf
                <input type="hidden" name="id" value="{{ $image->id }}">
                <input type="hidden" name="name" value="{{ $image->name }}">
                <input type="hidden" name="prix" value="{{ $image->prix }}">
        </form> 