<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserStoreRequest;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
   
    public function index()
    {
        
        $users = User::get();
        
        return view('user.index', [
        'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        $date = $request->validated();
        $date['password'] = bcrypt(rand(12345678,87654321));
        
        $user = User::create($date);
        $user -> address()->create($date);
      
        return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     */
    public function show($user)
    {

        return view('user.show', [
            'user' => $user
            ]);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($user)
    {
             return view('user.edit', [
            'user' => $user
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user)
    {
        $date = $request->only(['name', 'email']);
        $user->update($date);
        $date = $request->only(['street' , 'number']);
        $user -> address()->update($date);
       
        return redirect()->route('user.index');
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user)
    {
         
        $user->delete();
       
        return redirect()->back();
    }
    

}
