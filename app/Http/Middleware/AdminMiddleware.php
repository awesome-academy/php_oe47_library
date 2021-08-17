<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role_id == config('app.role_admin')) {
                return $next($request);
            } else {
                return redirect()->back()->with('thongbao', 'Vui lòng đăng nhập quyền Quản trị viên');
            }
        } else {
            return redirect('/auth/login')->with('thongbao', 'Bạn chưa đăng nhập');
        }
    }
}
