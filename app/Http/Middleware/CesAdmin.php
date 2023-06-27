<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CesAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->email == "adminadmin@ofppt.com"){
                    return $next($request);

        }else{
            redirect()->to('error')->with('error',"vous n'avez pas l'autorisation d'accéder car vous êtes pas un administrateur");
        }
    }
}
