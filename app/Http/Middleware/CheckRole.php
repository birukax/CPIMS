<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, String $role): Response
    {

        $roles = [
            'police' => [1, 4],
            'sl' => [2, 4],
            'co' => [3, 4],
            'admin' => [4],
            'dc' => [4, 5],
            'task_view' => [1, 2],
            'crime_manager' => [2, 3, 4, 5],
            'leave_manager' => [3, 4],
            'leave_request' => [1, 2, 3],
        ];
        $roleIds = $roles[$role] ?? [];
        if (!in_array(auth()->user()->role_id, $roleIds)) {

            abort(code: 404);
        }
        return $next($request);
    }
}
