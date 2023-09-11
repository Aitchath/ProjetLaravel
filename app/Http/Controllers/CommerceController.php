<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Panier;
use App\Models\Produit;
use App\Stripe\StripeAPI;
use Illuminate\Http\Request;



class CommerceController extends Controller
{

    public $stripeAPI;

    public function __construct(StripeAPI $stripeAPI){

        $this->stripeAPI = $stripeAPI;
    }

    public function quantity(){

        $this->stripeAPI->nombreproduit(0);
    }

  
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'disponibilite' => 'required',
            'categories' => 'required',
            'price' => 'required',
            'image' => 'required'
        ]);

            Produit::create([
            'name' => $request->name,
            'price' => $request->price,
            'categories' => $request->categories,
            'disponilibite' => $request->disponibilite,
            'path' => $request->image
        ]);

        $filename = time() . '.' . $request->image->extension();

        $path = $request->image->storeAs(
        'Images',
        $filename,
        'public'
            );

        $images = new produit();
        $images->name = $request->name;
        $images->disponibilite = $request->disponibilite;
        $images->categories = $request->categories;
        $images->price = $request->price;
        $images->path = $path;
        $images->save();
        
        $images = Produit::all();
        
        return view('profile/partials/ajout', compact('images'));
    }
    
    public function create(){

        return view('profile/partials/formulaire');
    }


    public function ajout(){

       $images = Produit::all();

        return view('profile/partials/ajout', compact('images'));
    }

    public function actualise(){

        $images = Produit::all();

        return view('profile/partials/actualise', compact('images'));
    }

    public function update($id){

        $images = Produit::find($id);

        return view('profile/partials/update', compact('images'));
    }

    public function traitement(Request $request){

        $request->validate([
            'name' => 'required',
            'disponibilite' => 'required',
            'categories' => 'required',
            'price' => 'required'
        ]);

        $image = Produit::find($request->id);
        $image->name = $request->name;
        $image->disponibilite = $request->disponibilite;
        $image->categories = $request->categories;
        $image->price = $request->price;
        $image->update();

        return redirect('/commerce.actualise');
    }

    public function delete($id){

        $images = Produit::find($id);
        $images ->delete();
        
        return redirect('/commerce.actualise');
    } 

    public function image(){

        $images = Produit::all();

        return view('profile/partials/image', compact('images'));
    }


    
  
}
