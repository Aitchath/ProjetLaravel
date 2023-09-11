@extends('layouts/myapp')

@section('content')

@include('profile/partials/header') 

<div class="py-8 px-8">

<div class="border-2 rounded-lg py-3 px-6 mb-8 w-40 h-14 bg-blue-400 font-semibold text-white ml-auto">  <button> <a href="{{route('Commerce.form')}}"> Créer Produict </a> </button>  </div>  

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Catégories
                </th>
                <th scope="col" class="px-6 py-3">
                    Disponible
                </th>
                <th scope="col" class="px-6 py-3">
                    Prix
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($images as $image)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$image->id}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$image->name}}
                </th>
                <td class="px-6 py-4">
                {{$image->categories}}
                </td>
                <td class="px-6 py-4">
                {{$image->disponibilite}}
                </td>
                <td class="px-6 py-4">
                {{$image->price}}
                </td>
                <td class="px-6 py-4">
                <a href="/commerce.update/{{$image->id}}" class="border-2 py-3 px-6 mb-8 w-50 h-14 bg-blue-400 font-semibold text-white ml-12 mb-8">Modifier</a>
                <a href="/commerce.delete/{{$image->id}}" class="border-2 py-3 px-6 mb-8 w-50 h-14 bg-red-400 font-semibold text-white ml-12 mb-8">Supprimé</a>
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>

</div>

@endsection