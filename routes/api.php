<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/convertUrl', function(Request $request) {
    $allRequest = $request->all();

    $url = urldecode($allRequest['url']);
    Log::debug('request url=' . $url);
    
    $controller = new \App\Http\Controllers\EvoHelpers;
    $url = $controller->getRedirectUrl($url);

    //Log::debug('redirect url=' . $url);
    $url = explode('evo-games.com/', $url)[1];
    
    $currency = strtoupper($allRequest['currency']);

    $domain = config("evolution.domains.".$currency);
    $url = 'https://'.$domain.'/'.$url;

    //Log::debug('final url=' . $url);
    $url = $controller->getRedirectUrl($url);

    try {
        $bodyContent = Http::get($url)->body();
        $bodyContent = str_replace("ingest.sentry.io", "ingest.sentryd.io", $bodyContent);
        $bodyContent = str_replace("81947", "11227", $bodyContent);
       

        Cache::set("evolution-content", $bodyContent, now()->addHours(12));
    } catch(\Exception $e) {
        Log::debug("FATAL ERROR TRYING TO CACHE BODY CONTENT FROM URL: ".$e->getMessage());
    }
    Log::debug('final redirected url=' . $url);
    return [
        "url" => $url
    ];
});
