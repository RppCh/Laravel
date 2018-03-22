<?php
namespace App\Http\Middleware;

use Closure;

class CheckLogin
{
    /**
     * 返回请求过滤器
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!session()->has('adminid')) {
            return redirect('admin/login');
        }

        return $next($request);
    }

}