<?php

return [
  "base_domain" => "dpg.evo-games.com",
  "base_slots_domain" => "dpg.evo-games.com",
  "domains" => [
    "USD" => str_replace("https://", "", env('EVO_USD_DOMAIN', env("APP_URL"), null)),
    "EUR" => str_replace("https://", "", env('EVO_EUR_DOMAIN', env("APP_URL"), null)),
    "GBP" => str_replace("https://", "", env('EVO_GBP_DOMAIN', env("APP_URL"), null)),
    "CAD" => str_replace("https://", "", env('EVO_CAD_DOMAIN', env("APP_URL"), null)),
    "NZD" => str_replace("https://", "", env('EVO_NZD_DOMAIN', env("APP_URL"), null)),
    "AUD" => str_replace("https://", "", env('EVO_AUD_DOMAIN', env("APP_URL"), null)),
  ],
  ];

