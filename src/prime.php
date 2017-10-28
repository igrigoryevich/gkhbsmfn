<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Finder\Finder;

class Doo
{
    public function doAwesomeDooThings()
    {
        return 'Hi GeekHub';

    }
}


$finder = new Finder();
$finder->name('photos*')->size('< 1000K')->date('since 24 hour ago');
foreach ($finder->in('ftp://ftp.2mcl.com/') as $file) {
    // ... do something with the file
}

