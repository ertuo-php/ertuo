<?php include __DIR__ . '/../../vendor/autoload.php';

error_reporting(E_ALL);

$api = file(__DIR__ . '/bitbucket-api.txt');
// $api = array_slice($api, 0, 5);

new Ertuo\Lab\Benchmark_Bitbucket\Generate\Ertuo_Generator($api);
new Ertuo\Lab\Benchmark_Bitbucket\Generate\Ertuo_Array($api);
