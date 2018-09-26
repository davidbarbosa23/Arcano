<?php 
$path['inc'] = __DIR__ . '/src/inc';

$uri['root'] = str_replace("\\", '/', (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] ); // http://arcano.tx
$uri['events'] = $uri['root'] . '/eventos';
$uri['book'] = $uri['root'] . '/libreria';
