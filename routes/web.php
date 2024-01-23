<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\ProxyHelperFacade;
use Illuminate\Http\Request;
use App\Http\Controllers\EvoStyle;
use App\Http\Controllers\EvoSetup;
use App\Http\Controllers\EvoConfig;


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

Route::middleware('api')->get('/frontend/loc/strings/{lang}/{file}', function(Request $request, $lang, $file) {
    $url = 'https://wac.evo-games.com/frontend/loc/strings/'.$lang.'/'.$file;
    $file = ProxyHelperFacade::CreateProxy($request)->toUrl($url);
    return response($file)
    ->header('Content-Type', 'application/json');
});

Route::middleware('api')->get('/frontend/evo/r2/images/{file}', function(Request $request, $file) {
    $url = 'https://wac.evo-games.com/frontend/evo/r2/images/'.$file;
    $file = ProxyHelperFacade::CreateProxy($request)->toUrl($url);
    return response($file)
    ->header('Content-Type', 'image/webp');
});

Route::middleware('api')->get('/frontend/evo/r2/js/{file}', function(Request $request, $file) {
    $url = 'https://wac.evo-games.com/frontend/evo/r2/js/'.$file;
    $file = ProxyHelperFacade::CreateProxy($request)->toUrl($url);
    return response($file)
    ->header('Content-Type', 'application/javascript');
});

Route::middleware('api')->get('/frontend/cvi/evo-video-components/{file}', function(Request $request, $file) {
    $url = 'https://wac.evo-games.com/frontend/cvi/evo-video-components/'.$file;
    $file = ProxyHelperFacade::CreateProxy($request)->toUrl($url);
    return response($file)
    ->header('Content-Type', 'application/javascript');
});


Route::middleware('api')->get('/api/player/screenName', function(Request $request) {
    $url = 'https://wac.evo-games.com/api/player/screenName';
    $response = ProxyHelperFacade::CreateProxy($request)->toUrl($url);
    return $response;
});

Route::middleware('api')->put('/api/player/screenName', function(Request $request) {
    $sessionid = $request->EVOSESSIONID;
    $url = 'https://wac.evo-games.com/api/player/screenName?EVOSESSIONID='.$sessionid.'&'.request()->getQueryString();
    $response = Http::withHeaders([
       "Accept" => "*/*",
       "Accept-Encoding" => "gzip, deflate, br",
       "Accept-Language" => "ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7",
       "Connection" => "keep-alive",
       "Content-Length" => "25",
       "Content-Type" => "application/json",
       "Cookie" => "EVOSESSIONID=".$sessionid."; cdn=https://static.egcdn.com; lang=en",
       "Host" => "wac.evo-games.com",
       "Origin" => "https://wac.evo-games.com",
       "Referer" => "https://wac.evo-games.com/frontend/evo/r2/",
       "Sec-Fetch-Dest" => "empty",
       "Sec-Fetch-Mode" => "cors",
       "Sec-Fetch-Site" => "same-origin",
       "User-Agent" => "Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_1 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.0 Mobile/14E304 Safari/602.1",
    ])->put($url, [ 'screenName' => $request->screenName ]);
    return $response;
});







Route::middleware('api')->get('/frontend/evo/r2/styles/{file}', function(Request $request, $file) {
    $url = 'https://wac.evo-games.com/frontend/evo/r2/styles/'.$file;
    $file = ProxyHelperFacade::CreateProxy($request)->toUrl($url);
    return response($file)
     ->header('Content-Type', 'text/css');
});

