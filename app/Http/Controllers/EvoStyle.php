<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Helpers\ProxyHelperFacade;

class EvoStyle extends Controller
{
  function __construct() {
    $this->evo_url_style = 'https://'.config("evolution.base_domain").'/style';
  }
  
  public function style(Request $request) {
    $style = ProxyHelperFacade::CreateProxy($request)->toUrl($this->evo_url_style);
    $style = json_decode($style->getContent(), true);
    if(isset($style['cashier'])) {
      unset($style['cashier']);
    }
    if(isset($style['licensee_lobby'])) {
      unset($style['licensee_lobby']);
    }
    if(isset($style['mobile_settings'])) {
      unset($style['mobile_settings']);
    }
    if(isset($style['responsible'])) {
      unset($style['responsible']);
    }
    if(isset($style['sessionTimeout'])) {
      unset($style['sessionTimeout']);
    }

    

    return $style;
  }
}