<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

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
}