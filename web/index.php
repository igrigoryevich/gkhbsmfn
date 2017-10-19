<?php
require_once __DIR__.'/../vendor/autoload.php';
//namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Finder\Finder;
$finder = new Finder();
$finder->in('src/');

echo "<h1>Hello GeekHub!</h1>";
