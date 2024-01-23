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
    return ProxyHelperFacade::CreateProxy($request)->toUrl($this->evo_url_style);
  }
}