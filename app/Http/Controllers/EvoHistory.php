<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Helpers\ProxyHelperFacade;

class EvoHistory extends Controller
{
  public function configRequest(Request $request, $day) {
    $url = 'https://'.config("evolution.base_domain").'/api/player/history/day/'.$day;
    return ProxyHelperFacade::CreateProxy($request)->toUrl($url);
  }
  
  public function usd(Request $request, $day) {
    $response = $this->configRequest($request, $day);
    $response = json_decode($response->getContent(), true);
    $i = 0;
    
    foreach($response as $gameHistory) {
        if(isset($gameHistory['stake'])) {
            $response[$i]['stake'] = str_replace("R$", "$", (str_replace("₺", "$", $gameHistory['stake'])));
        }
        if(isset($gameHistory['payout'])) {
            $response[$i]['payout'] = str_replace("R$", "$", (str_replace("₺", "$", $gameHistory['payout'])));
        }
        $i++;
    }
    return $response;
  }
    
  public function eur(Request $request, $day) {
    $response = $this->configRequest($request, $day);
    $response = json_decode($response->getContent(), true);
    $i = 0;
    foreach($response as $gameHistory) {
        if(isset($gameHistory['stake'])) {
            $response[$i]['stake'] = str_replace("R$", "€", (str_replace("₺", "€", $gameHistory['stake'])));
        }
        if(isset($gameHistory['payout'])) {
            $response[$i]['payout'] = str_replace("R$", "€", (str_replace("₺", "€", $gameHistory['payout'])));
        }
        $i++;
    }
    return $response;
  }

  public function gbp(Request $request, $day) {
    $response = $this->configRequest($request, $day);
    $response = json_decode($response->getContent(), true);
    $i = 0;
    foreach($response as $gameHistory) {
        if(isset($gameHistory['stake'])) {
            $response[$i]['stake'] = str_replace("R$", "£", (str_replace("₺", "£", $gameHistory['stake'])));
        }
        if(isset($gameHistory['payout'])) {
            $response[$i]['payout'] = str_replace("R$", "£", (str_replace("₺", "£", $gameHistory['payout'])));
        }
        $i++;
    }
    return $response;
  }
    
  public function cad(Request $request, $day) {
    $response = $this->configRequest($request, $day);
    $response = json_decode($response->getContent(), true);
    $i = 0;
    foreach($response as $gameHistory) {
        if(isset($gameHistory['stake'])) {
            $response[$i]['stake'] = str_replace("R$", "$", (str_replace("₺", "$", $gameHistory['stake'])));
        }
        if(isset($gameHistory['payout'])) {
            $response[$i]['payout'] = str_replace("R$", "$", (str_replace("₺", "$", $gameHistory['payout'])));
        }
        $i++;
    }
    return $response;
  }
      
  public function nzd(Request $request, $day) {
    $response = $this->configRequest($request, $day);
    $response = json_decode($response->getContent(), true);
    $i = 0;
    foreach($response as $gameHistory) {
        if(isset($gameHistory['stake'])) {
            $response[$i]['stake'] = str_replace("R$", "$", (str_replace("₺", "$", $gameHistory['stake'])));
        }
        if(isset($gameHistory['payout'])) {
            $response[$i]['payout'] = str_replace("R$", "$", (str_replace("₺", "$", $gameHistory['payout'])));
        }
        $i++;
    }
    return $response;
  }
      
  public function aud(Request $request, $day) {
    $response = $this->configRequest($request, $day);
    $response = json_decode($response->getContent(), true);
    $i = 0;
    foreach($response as $gameHistory) {
        if(isset($gameHistory['stake'])) {
            $response[$i]['stake'] = str_replace("R$", "$", (str_replace("₺", "$", $gameHistory['stake'])));
        }
        if(isset($gameHistory['payout'])) {
            $response[$i]['payout'] = str_replace("R$", "$", (str_replace("₺", "$", $gameHistory['payout'])));
        }
        $i++;
    }
    return $response;
  }
}

