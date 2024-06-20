<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/convertUrl', function(Request $request) {
    $allRequest = $request->all();

    $url = urldecode($allRequest['url']);
    Log::debug('request url=' . $url);
    $controller = new \App\Http\Controllers\EvoHelpers;
    $url = $controller->getRedirectUrl($url);
    Log::debug('redirect url=' . $url);
    $url = explode('evo-games.com/', $url)[1];
    
    $currency = strtoupper($allRequest['currency']);

    $domain = config("evolution.domains.".$currency);
    $url = 'https://'.$domain.'/'.$url;
    Log::debug('final url=' . $url);
    $url = $controller->getRedirectUrl($url);
    Log::debug('final redirected url=' . $url);
    return [
        "url" => $url
    ];
});
