<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Helpers\ProxyHelperFacade;

class EvoConfig extends Controller
{
  function __construct() {
    $this->evo_url_config = 'https://'.config("evolution.base_domain").'/config';
  }
  public function configRequest(Request $request) {
    $response = ProxyHelperFacade::CreateProxy($request)->toUrl($this->evo_url_config);
    $response = json_decode($response->getContent(), true);
    //Log::debug($response);
    //$response = str_replace("https://live1.egcvi.com", "https://dgb1.evo-games.eu/cdn/app/43/amlst:dc3_ct_auto/manifest-ws2.json?url=https://live1.egcvi.com", $response);
    //$response['view1-mobile'] = "https://fra1-mdp-e03.egcvi.com/app/43/amlst:dc3_ct_auto/manifest-ws2.json?ac=aac&streamid=0&videoSessionId=sa5pe5dob43c4sr4-sa5pe5dob43c4sr4sbld545yzelerrima933267ee0dc02d7f56abdbf836d9321165152b3e23f5076-CrazyTime0000001-b92352&videoToken=eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJkYzNfY3QiLCJleHAiOjE3MTk1MjExMDIsImlzcyI6IkwxeTZxcmVOTFMifQ.ryukiMwo6EffySKBrcgthQWOjnwQHNd6wqVPYmMfaEo&vc=h264";
    //$response['view1-desktop'] = "https://fra1-mdp-e03.egcvi.com/app/43/amlst:dc3_ct_auto/manifest-ws2.json?ac=aac&streamid=0&videoSessionId=sa5pe5dob43c4sr4-sa5pe5dob43c4sr4sbld545yzelerrima933267ee0dc02d7f56abdbf836d9321165152b3e23f5076-CrazyTime0000001-b92352&videoToken=eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJkYzNfY3QiLCJleHAiOjE3MTk1MjExMDIsImlzcyI6IkwxeTZxcmVOTFMifQ.ryukiMwo6EffySKBrcgthQWOjnwQHNd6wqVPYmMfaEo&vc=h264";

    return $response;
  }
  
  public function usd(Request $request) {
    $config = $this->configRequest($request);
    //$config['currencyCode'] = "USD";
    $config['currencySymbol'] = "$";
    return $config;
  }
    
  public function eur(Request $request) {
    $config = $this->configRequest($request);
    //$config['currencyCode'] = "EUR";
    $config['currencySymbol'] = "€";
    return $config;
  }

  public function gbp(Request $request) {
    $config = $this->configRequest($request);
    //$config['currencyCode'] = "GBP";
    $config['currencySymbol'] = "£";
    return $config;
  }
    
  public function cad(Request $request) {
    $config = $this->configRequest($request);
    //$config['currencyCode'] = "CAD";
    $config['currencySymbol'] = "$";
    return $config;
  }
      
  public function nzd(Request $request) {
    $config = $this->configRequest($request);
    //$config['currencyCode'] = "NZD";
    $config['currencySymbol'] = "$";
    return $config;
  }
      
  public function aud(Request $request) {
    $config = $this->configRequest($request);
    //$config['currencyCode'] = "AUD";
    $config['currencySymbol'] = "$";
    return $config;
  }
}

