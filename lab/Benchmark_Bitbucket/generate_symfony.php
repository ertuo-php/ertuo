<?php include __DIR__ . '/../../vendor/autoload.php';

error_reporting(E_ALL);

$api = file(__DIR__ . '/bitbucket-api.txt');

new Ertuo\Lab\Benchmark_Bitbucket\Generate\Symfony($api);
