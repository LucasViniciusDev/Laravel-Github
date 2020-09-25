<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

abstract class Services
{
    public function error(\Exception $e)
    {
        $error = new \stdClass;
        $error->error = true;
        $error->message = $e->getMessage();
        $error->code = $e->getCode();

        $message = "ERROR: {$error->message} | CODE: {$e->getCode()}";
        Log::error($message);

        return $error;
    }
}
