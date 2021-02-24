<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Permission
{
    public function handle($request, Closure $next)
    {
        $action = app('request')->route()->getAction();
        $controller = class_basename($action['controller']);
        list($controller, $action) = explode('@', $controller);

        $user = Auth::user();
        $permissions = $user->permissions()->get();

        foreach ($permissions as $permission) {
            if ($permission->controller_name == $controller) {
                return $next($request);
            }
        }

        return redirect('/');
    }
}
