<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Helpers\ProxyHelperFacade;

class EvoHelpers extends Controller
{
  public function randomUserAgent() {

  }
  public function inBetween($a, $b, $data)
  {
    preg_match('/'.$a.'(.*?)'.$b.'/s', $data, $match);
    if(!isset($match[1])) {
        return false;
    }
    return $match[1];
  }
  public function getRedirectUrl($url) {
          $ch = curl_init($url);
          curl_setopt($ch, CURLOPT_HEADER, true);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 11);
          curl_setopt($ch, CURLOPT_TIMEOUT, 11);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          $html = curl_exec($ch);
          $redirectURL = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
          curl_close($ch);
          return $redirectURL;
  }

  public function requestScreenName(Request $request, $screenName)
  {
      $sessionid = $request->EVOSESSIONID;
      $requestDomain = 'https://'.config("evolution.base_domain");
      $url = $requestDomain.'/api/player/screenName?EVOSESSIONID='.$sessionid.'&'.request()->getQueryString();
      $response = Http::withHeaders([
        "Accept" => "*/*",
        "Accept-Encoding" => "gzip, deflate, br",
        "Accept-Language" => "ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7",
        "Connection" => "keep-alive",
        "Content-Length" => "25",
        "Content-Type" => "application/json",
        "Cookie" => "EVOSESSIONID=".$sessionid."; cdn=https://static.egcdn.com; lang=en",
        "Host" => config("evolution.base_domain"),
        "Origin" => $requestDomain,
        "Referer" => $requestDomain."/frontend/evo/r2/",
        "Sec-Fetch-Dest" => "empty",
        "Sec-Fetch-Mode" => "cors",
        "Sec-Fetch-Site" => "same-origin",
        "User-Agent" => "Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_1 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.0 Mobile/14E304 Safari/602.1",
      ])->put($url, ['screenName' =>  $screenName]);
      return $response;
  }

    
  public function setScreenName(Request $request)
  {
    return $this->requestScreenName($request, $request->screenName);
  }

  public function getScreenName(Request $request)
  {
    $url = 'https://'.config("evolution.base_domain").'/api/player/screenName';
    $response = ProxyHelperFacade::CreateProxy($request)->toUrl($url);
    $response = json_decode($response->getContent(), true);
    if(isset($response['screenName'])) {
      $response['screenName'] = str_replace("BRL", "", (str_replace("TRY", "", $response['screenName'])));
    }
    return $response;
  }
}