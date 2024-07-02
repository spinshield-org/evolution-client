<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\ProxyHelperFacade;
use Illuminate\Http\Request;
use App\Http\Controllers\EvoStyle;
use App\Http\Controllers\EvoSetup;
use App\Http\Controllers\EvoConfig;
use App\Http\Controllers\EvoHistory;
use App\Http\Controllers\EvoHelpers;


Route::get('/', function () {
    return view("evolution-error");
    return array("evo" => "1.0.1");
});

Route::get('/frontend/evo/r2', function (Request $request) {
    return view('evolution');
});

Route::get('/e', function (Request $request) {
    $helper = new \App\Http\Controllers\EvoHelpers;
    $url = base64_decode($request->u);
    $evo_session_id = $helper->inBetween("EVOSESSIONID=", "&", $url);
    $cookie = Cookie::make('EVOSESSIONID', $evo_session_id);
    return redirect($url)->withCookie($cookie);
});



Route::middleware('api')->post('/log', function(Request $request) {
    return [];
});

Route::middleware('api')->domain((config("evolution.domains.USD")))->get('/setup', [EvoSetup::class, 'usd'])->name('evolution.client.setup.usd');
Route::middleware('api')->domain((config("evolution.domains.EUR")))->get('/setup', [EvoSetup::class, 'eur'])->name('evolution.client.setup.eur');
Route::middleware('api')->domain((config("evolution.domains.GBP")))->get('/setup', [EvoSetup::class, 'gbp'])->name('evolution.client.setup.gbp');
Route::middleware('api')->domain((config("evolution.domains.CAD")))->get('/setup', [EvoSetup::class, 'cad'])->name('evolution.client.setup.cad');
Route::middleware('api')->domain((config("evolution.domains.NZD")))->get('/setup', [EvoSetup::class, 'nzd'])->name('evolution.client.setup.nzd');
Route::middleware('api')->domain((config("evolution.domains.AUD")))->get('/setup', [EvoSetup::class, 'aud'])->name('evolution.client.setup.aud');

Route::middleware('api')->domain((config("evolution.domains.USD")))->get('/config', [EvoConfig::class, 'usd'])->name('evolution.client.config.usd');
Route::middleware('api')->domain((config("evolution.domains.EUR")))->get('/config', [EvoConfig::class, 'eur'])->name('evolution.client.config.eur');
Route::middleware('api')->domain((config("evolution.domains.GBP")))->get('/config', [EvoConfig::class, 'gbp'])->name('evolution.client.config.gbp');
Route::middleware('api')->domain((config("evolution.domains.CAD")))->get('/config', [EvoConfig::class, 'cad'])->name('evolution.client.config.cad');
Route::middleware('api')->domain((config("evolution.domains.NZD")))->get('/config', [EvoConfig::class, 'nzd'])->name('evolution.client.config.nzd');
Route::middleware('api')->domain((config("evolution.domains.AUD")))->get('/config', [EvoConfig::class, 'aud'])->name('evolution.client.config.aud');

Route::middleware('api')->get('/style', [EvoStyle::class, 'style'])->name('evolution.client.style');


Route::middleware('api')->domain((config("evolution.domains.USD")))->get('/api/player/history/day/{day}', [EvoHistory::class, 'usd'])->name('evolution.client.history.usd');
Route::middleware('api')->domain((config("evolution.domains.EUR")))->get('/api/player/history/day/{day}', [EvoHistory::class, 'eur'])->name('evolution.client.history.eur');
Route::middleware('api')->domain((config("evolution.domains.GBP")))->get('/api/player/history/day/{day}', [EvoHistory::class, 'gbp'])->name('evolution.client.history.gbp');
Route::middleware('api')->domain((config("evolution.domains.CAD")))->get('/api/player/history/day/{day}', [EvoHistory::class, 'cad'])->name('evolution.client.history.cad');
Route::middleware('api')->domain((config("evolution.domains.NZD")))->get('/api/player/history/day/{day}', [EvoHistory::class, 'nzd'])->name('evolution.client.history.nzd');
Route::middleware('api')->domain((config("evolution.domains.AUD")))->get('/api/player/history/day/{day}', [EvoHistory::class, 'aud'])->name('evolution.client.history.aud');

Route::middleware('api')->get('/frontend/loc/strings/{lang}/{file}', function(Request $request, $lang, $file) {
    $url = 'https://'.config("evolution.base_domain").'/frontend/loc/strings/'.$lang.'/'.$file;
    $file = ProxyHelperFacade::CreateProxy($request)->toUrl($url);
    return response($file->getContent())
    ->header('Content-Type', 'application/json');
});

Route::middleware('api')->get('/cdn/app/43/amlst:dc3_ct_auto/manifest-ws2.json', function(Request $request, $file) {
    $url = $request->url;
    $file = ProxyHelperFacade::CreateProxy($request)->toUrl($url);
    Log::debug($file->getContent());
    return response($file->getContent());
});

Route::middleware('api')->get('/frontend/evo/r2/images/{file}', function(Request $request, $file) {
    $url = 'https://'.config("evolution.base_domain").'/frontend/evo/r2/images/'.$file;
    $file = ProxyHelperFacade::CreateProxy($request)->toUrl($url);
    return response($file->getContent())
    ->header('Content-Type', 'image/webp');
});

Route::middleware('api')->get('/frontend/evo/r2/js/{file}', function(Request $request, $file) {
    $url = 'https://'.config("evolution.base_domain").'/frontend/evo/r2/js/'.$file;
    $file = ProxyHelperFacade::CreateProxy($request)->toUrl($url);
    return response($file->getContent())
    ->header('Content-Type', 'application/javascript');
});

Route::middleware('api')->get('/frontend/cvi/evo-video-components/{file}', function(Request $request, $file) {
    $url = 'https://wac.evo-games.com/frontend/cvi/evo-video-components/'.$file;
    $file = ProxyHelperFacade::CreateProxy($request)->toUrl($url);
    return response($file->getContent())
    ->header('Content-Type', 'application/javascript');
});


Route::middleware('api')->get('/api/player/history/days', function(Request $request) {
    $url = 'https://'.config("evolution.base_domain").'/api/player/history/days';
    $response = ProxyHelperFacade::CreateProxy($request)->toUrl($url);
    return $response;
});

Route::middleware('api')->get('/api/player/history/game/{game}', function(Request $request, $game) {
    $url = 'https://'.config("evolution.base_domain").'/api/player/history/game/'.$game;
    $response = ProxyHelperFacade::CreateProxy($request)->toUrl($url);
    $response = json_decode($response->getContent(), true);
    if(isset($response['participants'])) {
        $i = 0;
        foreach($response['participants'] as $participant) {
            if(isset($participant['currencySymbol'])) {
                $response['participants'][$i]['currencySymbol'] = "";
            }
            $i++;
        }
    }
    return $response;
});



Route::middleware('api')->get('/api/player/screenName', [EvoHelpers::class, 'getScreenName'])->name('evolution.get.screenname');
Route::middleware('api')->put('/api/player/screenName', [EvoHelpers::class, 'setScreenName'])->name('evolution.put.screenname');


Route::middleware('api')->get('/frontend/evo/r2/styles/{file}', function(Request $request, $file) {
    $url = 'https://'.config("evolution.base_domain").'/frontend/evo/r2/styles/'.$file;
    $file = ProxyHelperFacade::CreateProxy($request)->toUrl($url);
    return response($file)
     ->header('Content-Type', 'text/css');
});

