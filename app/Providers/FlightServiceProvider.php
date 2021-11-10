<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class FlightServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return array $response
     */
    public function boot()
    {
        try {
            $response = Http::get("http://prova.123milhas.net/api/flights");
        } catch (\Exception $e) {
            return response(["message" => $e->getMessage()], 500);
        }
        
        return json_decode($response);
    }
}
