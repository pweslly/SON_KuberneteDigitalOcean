<?php
$http = new swoole_http_server("0.0.0.0", 80);

$http->on("start", function ($server) {
    echo "Meu servido on-line na porta 8101 http://127.0.0.1:80\n";
});

$http->on("request", function ($request, $response) {
    $response->header("Content-Type", "text/plain");
    $response->end("Ola mundo\n");
});

$http->start();

?>