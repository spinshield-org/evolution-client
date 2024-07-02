<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Helpers\ProxyHelperFacade;

class EvoSetup extends Controller
{
  function __construct() {
    $this->evo_url_setup = 'https://'.config("evolution.base_domain").'/setup';
  }
  public function setupRequest(Request $request) {
    $setup = ProxyHelperFacade::CreateProxy($request)->toUrl($this->evo_url_setup);
    $setup = json_decode($setup->getContent(), true);
    $setup['casino_id'] = "wildwestgaming0";
    if(isset($setup['screenNameChanges'])) {
      if(isset($setup['screenNameChanges']['enabled'])) {
        $setup['screenNameChanges']['enabled'] = false;
      }
    }
    if(isset($setup['chat'])) {
      if(isset($setup['chat']['serverHost'])) {
        $setup['chat']['serverHost'] = "a8r.evo-games.com";
      }
    }
    
    return $setup;
  }
  
  public function usd(Request $request) {
    $setup = $this->setupRequest($request);
    $setup['currencySymbol'] = "$";
    return $setup;
  }
    
  public function eur(Request $request) {
    $setup = $this->setupRequest($request);
    $setup['currencySymbol'] = "€";
    return $setup;
  }

  public function gbp(Request $request) {
    $setup = $this->setupRequest($request);
    //$setup['currencyCode'] = "GBP";
    $setup['currencySymbol'] = "£";
    return $setup;
  }
    
  public function cad(Request $request) {
    $setup = $this->setupRequest($request);
    //$setup['currencyCode'] = "CAD";
    $setup['currencySymbol'] = "$";
    return $setup;
  }
      
  public function nzd(Request $request) {
    $setup = $this->setupRequest($request);
    //$setup['currencyCode'] = "NZD";
    $setup['currencySymbol'] = "$";
    return $setup;
  }
      
  public function aud(Request $request) {
    $setup = $this->setupRequest($request);
    //$setup['currencyCode'] = "AUD";
    $setup['currencySymbol'] = "$";
    return $setup;
  }
}

