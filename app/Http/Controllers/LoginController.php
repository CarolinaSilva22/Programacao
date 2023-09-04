<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{

  public function index(Request $request)
    {
        $erro = $request->get('erro');
        return view('site.login', ['erro' => $erro]);
    }
    public function autenticar(LoginRequest $request)
    {  
        $request->validated();
        $email = $request->get('usuario');
        $password = $request->get('senha');
        $user = new User();
        $usuario = $user->where('email',$email)->where('password',$password)->get()->first();
       
        if(isset($usuario->name)){
            $request->session()->put(['key' => 'email']);
            return redirect()->route('app.home');

           }else{
              return redirect()->route('site.login', ['erro' => 'Senha ou email invalidos']);
           }
    }
    public function sair(Request $request){
       
          $request->session()->flush();
        return redirect()->route('site.login');
    }

 /*
    public function create()
    {
        //
    }
    public function store(Request $request)
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
    }
    */
}
