<?php


namespace Dlabs\LaravelTrustedIp\Exception;


class TrustedIpException extends \Exception
{


    public function render($request)
    {
        return response()->json([
            'message' => 'Ip is not trusted !!! No vex'
        ], 401);
    }
}
