<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   @vite('resources/css/app.css')
    <title>Projet</title>
</head>
@include('projet')

<body class="bg-blue-50">
       
            @if (Route::has('login')) 
                <div class="sm:fixed sm:top-0 sm:right-0 p-8 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-lg mr-20 items-stretch justify-center focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-semibold text-lg mr-32 items-stretch justify-center focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

<div>


   <div class="flex py-8 px-16 ">
        <div class="border-2 rounded-lg w-72 h-92 m-8">
               <div class="py-6 items-stretch justify-center">  <img class="w-72 h-48 z-0" src=" {{ asset('images/image3.jpg')}} " alt=""> </div> 
               <div class="border-2 rounded-full px-3 font-bold ml-24  w-40 h-8 z-20 bg-blue-400 text-white text-2xl"> 15000 fcfa </div>
               <a href=""  class="font-bold text-2xl max-w-lg ml-2" >  Sac de bonne qualité  </a>
        </div>               
        <div class="border-2 rounded-lg w-72 h-92 m-8">
               <div class="py-6 items-stretch justify-center">  <img class="w-72 h-48" src=" {{ asset('images/image2.jpg')}} " alt=""> </div> 
               <div class="border-2 rounded-full px-3 font-bold ml-24  w-40 h-8 z-20 bg-blue-400 text-white text-2xl"> 8000 fcfa </div>
               <a href=""  class="font-bold text-2xl max-w-lg ml-2" >  Sac de bonne qualité  </a>
        </div>               
        <div class="border-2 rounded-lg w-72 h-92 m-8">
               <div class="py-6 items-stretch justify-center">  <img class="w-72 h-48" src=" {{ asset('images/image7.webp')}} " alt=""> </div> 
               <div class="border-2 rounded-full px-3 font-bold ml-24  w-40 h-8 z-20 bg-blue-400 text-white text-2xl"> 25000 fcfa </div>
               <a href=""  class="font-bold text-2xl max-w-lg ml-2" >  Sac de bonne qualité  </a>
        </div>               
        <div class="border-2 rounded-lg w-72 h-92 m-8">
               <div class="py-6 items-stretch justify-center">  <img class="w-72 h-48" src=" {{ asset('images/image4.jpeg')}} " alt=""> </div> 
               <div class="border-2 rounded-full px-3 font-bold ml-24 w-40 h-8 z-20 bg-blue-400 text-white text-2xl"> 10000 fcfa </div>
               <a href=""  class="font-bold text-2xl max-w-lg ml-2" >  Sac de bonne qualité  </a> 
        </div>  
        
        <div class="border-2 rounded-lg w-72 h-92 m-8">
               <div class="py-6 items-stretch justify-center">  <img class="w-72 h-48" src=" {{ asset('images/image7.webp')}} " alt=""> </div> 
               <div class="border-2 rounded-full px-3 font-bold ml-24 w-40 h-8 z-20 bg-blue-400 text-white text-2xl"> 5000 fcfa </div>
               <a href=""  class="font-bold text-2xl max-w-lg ml-2" >  Sac de bonne qualité  </a>
        </div> 

        <div class="border-2 rounded-lg w-72 h-92 m-8">
               <div class="py-6 items-stretch justify-center">  <img class="w-72 h-48" src=" {{ asset('images/image13.webp')}} " alt=""> </div> 
               <div class="border-2 rounded-full px-3 font-bold ml-24 w-40 h-8 z-20 bg-blue-400 text-white text-2xl"> 38000 fcfa </div>
               <a href=""  class="font-bold text-2xl max-w-lg ml-2" >  Sac de bonne qualité  </a>
        </div> 
                 
   </div>


</div>

</body>
</html>
    
