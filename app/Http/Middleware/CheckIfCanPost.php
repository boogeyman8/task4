<?php

namespace App\Http\Middleware;

use Closure;
use App\Can_post;
class CheckIfCanPost
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
        if(Can_post::firstOrFail()['can_add']==1){
            return redirect()->route('toredirect');
        }
        return $next($request);
    }
}
