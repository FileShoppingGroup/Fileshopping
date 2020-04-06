<?php

namespace App\Http\Middleware;

use Closure;
use App\Role;

class UserLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $roles = auth()->user()->role()->orderBy('en_name')->get()->all();

        if(auth()->check()){
          foreach ($roles as $role) {

            if($role['en_name']=='Admin'){
                return $next($request);
            }
          }
          return redirect(route('userpanel'));
        }

    }
}
