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
    public function handle(Request $request, Closure $next, string $role): Response
    {

        $roles = [
            'police' => [1],
            'shift_leader' => [2],
            'chief_officer' => [3],
            'admin' => [4],
            'discipline_commmittee' => [5]
        ];

        if (!in_array(auth()->user()->role_id, $roles))
            return $next($request);
    }
}
