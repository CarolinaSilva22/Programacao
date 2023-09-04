<?php

namespace App\Http\Controllers;
//use App\Http\Request\UserStoreRequest;

use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;
use \App\Models\siteContato;



class ContatoController extends Controller
{  
    public function contato(){
        return view('site.contato');
}


public function store(UserStoreRequest $request)
    {  
      $contato = $request->validated();
      siteContato::create($contato);
       return redirect()->route('site.principal');
    }

  
  /*
      Display a listing of the resource.
     
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

   
    

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }*/
}
