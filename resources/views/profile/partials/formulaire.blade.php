@extends('layouts/myapp')

@section('content')

@include('profile/partials/header') 

<form action=" {{ route('Commerce.store') }} " method="POST" enctype="multipart/form-data">
@csrf

    <div class="py-6 px-6">
        <div>
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix</label>
            <input type="number" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catégories</label>
            <input type="text" name="categories" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Disponibilité</label>
            <input type="text" name="disponibilite" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Images du produit</label>
            <input type="file" name="image" accept="image/png, image/jpeg" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <br> <br>
        <div class="border-2 rounded-lg py-3 px-6 mb-8 w-24 h-14 bg-blue-400 font-semibold text-white ml-auto"> <a href="{{route('Commerce.ajout')}}"> <button type="submit"> Créer </button> </a></div>
    </div>

</form>






@endsection