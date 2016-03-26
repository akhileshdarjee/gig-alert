<?php

namespace Gig\Http\Middleware;

use Closure;

class CustomerMiddleware
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
		if ($request->user()) {
			if ($request->user()->role == "Customer") {
				return $next($request);
			}
		}

		return redirect('/');
	}
}