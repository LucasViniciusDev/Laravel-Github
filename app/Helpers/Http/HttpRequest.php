<?php

namespace App\Helpers\Http;

class HttpRequest {

    private static $instance;
    private static $url;

    public function __construct()
    {
        self::$url = \config('github.url') . '/';
    }

    public static function instance()
    {
        if(!self::$instance)
        {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public static function get($endpoint)
    {
        $response = self::request($endpoint, 'GET');
        return $response;
    }

    private static function request($endpoint, $method, $timeout = 0)
    {
        $url = self::$url . $endpoint;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => $timeout,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => array(
                "User-Agent: laravel"
            )
        ));

        $data = new \stdClass;
        $data->response = json_decode(curl_exec($curl));
        $data->httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        $error = curl_error($curl);
        if(!empty($error))
            throw new \Exception($error, $data->httpCode);

        curl_close($curl);
        return $data;
    }
}
