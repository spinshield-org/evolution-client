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
    return ProxyHelperFacade::CreateProxy($request)->toUrl($this->evo_url_setup);
  }
  
  public function usd(Request $request) {
    $setup = $this->setupRequest($request);
    $setup = json_decode($setup->getContent(), true);
    //setup['currencyCode'] = "USD";
    $setup['casino_id'] = "wildwestgaming0";

    $setup['currencySymbol'] = "$";
    return $setup;
  }
    
  public function eur(Request $request) {
    $setup = $this->setupRequest($request);
    $setup = json_decode($setup->getContent(), true);
    //$setup['currencyCode'] = "EUR";
    $setup['casino_id'] = "wildwestgaming0";
    $setup['currencySymbol'] = "€";
    return $setup;
  }

  public function gbp(Request $request) {
    $setup = $this->setupRequest($request);
    $setup = json_decode($setup->getContent(), true);
    //$setup['currencyCode'] = "GBP";
    $setup['casino_id'] = "wildwestgaming0";
    $setup['currencySymbol'] = "£";
    return $setup;
  }
    
  public function cad(Request $request) {
    $setup = $this->setupRequest($request);
    $setup = json_decode($setup->getContent(), true);
    //$setup['currencyCode'] = "CAD";
    $setup['casino_id'] = "wildwestgaming0";
    $setup['currencySymbol'] = "$";
    return $setup;
  }
      
  public function nzd(Request $request) {
    $setup = $this->setupRequest($request);
    $setup = json_decode($setup->getContent(), true);
    //$setup['currencyCode'] = "NZD";
    $setup['casino_id'] = "wildwestgaming0";
    $setup['currencySymbol'] = "$";
    return $setup;
  }
      
  public function aud(Request $request) {
    $setup = $this->setupRequest($request);
    $setup = json_decode($setup->getContent(), true);
    //$setup['currencyCode'] = "AUD";
    $setup['casino_id'] = "wildwestgaming0";
    $setup['currencySymbol'] = "$";
    return $setup;
  }
}

