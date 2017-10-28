<?php
require_once __DIR__ . '/../vendor/autoload.php';
require '../src/prime.php';
//namespace AppBundle\Controller;

$doo = new Doo();
echo $doo->doAwesomeDooThings();

