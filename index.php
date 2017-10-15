<?php
require '../vendor/autoload.php';

namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Finder\Finder;
$finder = new Finder();
$finder->in('../data/');

class LuckyController
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}

