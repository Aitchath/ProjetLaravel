<nav class="border bg-white h-24">
    <div class="flex items-stretch justify-center p-8 ">
        <div class="font-semibold text-lg mr-2"> <a href="#"> Accueil </a>  </div>
        <div class="font-semibold text-lg ml-4">Qui sommes-nous?</div>
        <div class="font-semibold text-lg ml-6">Nos services</div>
        <div class="font-semibold text-lg ml-8"> <a href="{{route('Commerce.actualise')}}"> Actualité </a> </div>
        <div class="font-semibold text-lg ml-10">Contactez-nous</div>
        <div class="border-2 rounded-full py-3 px-6 mb-8 w-50 h-14 bg-blue-400 font-semibold text-white ml-12 mb-8">  <button> <a href="{{route('Commerce.ajout')}}"> Notre boutique </a> </button>  </div>  
        <div class="rounded-lg w-1.5/12 flex  py-3 px-6 h-12 bg-gray-100 ml-14 p-8">  
             <div class="w-8 mr-2"> 
                <span class="icon-state__primary"><svg class="icon icon--cart " viewBox="0 0 27 24" role="presentation"><g transform="translate(0 1)" stroke-width="2" stroke="currentColor" class="h-20" fill="none" fill-rule="evenodd"> <circle stroke-linecap="square" cx="11" cy="20" r="2"></circle> <circle stroke-linecap="square" cx="22" cy="20" r="2"></circle> <path d="M7.31 5h18.27l-1.44 10H9.78L6.22 0H0"></path> </g> </svg></span>
             </div>
            <div class="ml-2">Panier</div>
                 <div class="mb-2 rounded-full bg-black w-9 h-9 text-white text-2xl font-bold px-3 ml-4"> {{ Cart::count() }} </div>       
            </div>  
    </div>
</nav>

