<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;


class MyfirstMiddleware
{
    //private $users;
   // public function __construct(User $users){
   // $this->users = $users;
   // }
    public function handle(Request $request, Closure $next)
    {
   //    $respoonse = $next($request);
   // 
      //if($this->users->count() === 14)
   //     return $respoonse;

    //    dd('Existem mais ou menos de 14 usuarios');
    }
}
