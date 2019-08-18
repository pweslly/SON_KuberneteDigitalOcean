<?php

$http = new swoole_http_server("0.0.0.0:80");

$http->on("start", function($server)
{
  echo "Rodando na porta 80";
});

$http->on("request", function($request, $response)
{
  $response->header("Content-type", "text/html");
  $response->end("Ola mundo!");
});

$http->start();