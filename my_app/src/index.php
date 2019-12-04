<?php

$key = 'data_source';
$redis = new Redis();
$redis->connect('redis_server', 6379);
$value = $redis->get($key);
$redis->close();

echo "<pre>";
var_dump($value);