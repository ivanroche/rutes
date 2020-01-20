<?php

namespace App\Http\Middleware;

use Closure;

class EsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next perme pasar a la següent acció de la request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (is_null($request->route('admin'))){
            return redirect('peras');

        }
        return $next($request);
    }
}
