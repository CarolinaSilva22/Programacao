<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle( Request $request, Closure $next)
    {
    //verifica se o usuario possui acesso, se não, manda a mensagem
     
    //if(isset($_SESSION['email']) == '') {
      if ($request->session()->has('key')) {
        return $next($request);
      } else {
        return redirect()->route('site.login', ['erro' => 'Necessario realizar login para acessar']);
      }
    }
}
