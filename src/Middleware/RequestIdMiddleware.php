<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 28/04/2017
 * Time: 11:09 AM
 */

namespace Cmzz\RequestId\Middleware;


use Cmzz\RequestId\RequestId;
use Illuminate\Http\Request;
use Closure;

class RequestIdMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        $requestId = new RequestId();
        $id = $requestId->create();

        $request->requestId = $id;

        return $next($request);
    }

}