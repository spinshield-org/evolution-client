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
    return ProxyHelperFacade::CreateProxy($request)->toUrl($this->evo_url_config);
  }
  
  public function usd(Request $request) {
    $config = $this->configRequest($request);
    $config = json_decode($config->getContent(), true);
    //$config['currencyCode'] = "USD";
    $config['currencySymbol'] = "$";
    return $config;
  }
    
  public function eur(Request $request) {
    $config = $this->configRequest($request);
    $config = json_decode($config->getContent(), true);
    //$config['currencyCode'] = "EUR";
    $config['currencySymbol'] = "€";
    return $config;
  }

  public function gbp(Request $request) {
    $config = $this->configRequest($request);
    $config = json_decode($config->getContent(), true);
    //$config['currencyCode'] = "GBP";
    $config['currencySymbol'] = "£";
    return $config;
  }
    
  public function cad(Request $request) {
    $config = $this->configRequest($request);
    $config = json_decode($config->getContent(), true);
    //$config['currencyCode'] = "CAD";
    $config['currencySymbol'] = "$";
    return $config;
  }
      
  public function nzd(Request $request) {
    $config = $this->configRequest($request);
    $config = json_decode($config->getContent(), true);
    //$config['currencyCode'] = "NZD";
    $config['currencySymbol'] = "$";
    return $config;
  }
      
  public function aud(Request $request) {
    $config = $this->configRequest($request);
    $config = json_decode($config->getContent(), true);
    //$config['currencyCode'] = "AUD";
    $config['currencySymbol'] = "$";
    return $config;
  }
}

