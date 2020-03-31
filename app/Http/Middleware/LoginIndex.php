<?php

namespace App\Http\Middleware;

use Closure;

class LoginIndex
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
        $name=session('name');
        if($name==''){
            echo '您还没有登录请您先登录';
            header("refresh:2,url='/index/login'");
            die;
        }
        return $next($request);
    }
}