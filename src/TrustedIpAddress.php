<?php

namespace Dlabs\LaravelTrustedIp;

use Dlabs\LaravelTrustedIp\Exception\TrustedIpException;
use Closure;


class TrustedIpAddress
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  array  $ipNames
     * @return mixed
     */
    public function handle($request, Closure $next, ...$ipNames)
    {
        $client_ip = $request->ip();
        $queryBuilder = Model\TrustedIpAddress::query();

        if (!count($ipNames)) {
            $isIpAddressValid = $queryBuilder
                ->where('value', $client_ip)
                ->exists();
            if (!$isIpAddressValid) {
                throw new TrustedIpException(sprintf('Ip address %s is not white listed', $client_ip));
            }
        } else {
            $whiteListedIps = $queryBuilder->whereIn('name', $ipNames)->pluck('value')->toArray();
            if (!in_array($client_ip, $whiteListedIps, true)) {
                throw new TrustedIpException(sprintf('Ip address %s is not white listed', $client_ip));
            }
        }

        return $next($request);
    }
}
