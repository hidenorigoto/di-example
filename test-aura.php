<?php
/**
 * @link      https://github.com/hidenorigoto/di-example
 * @license   Public Domain
 */

require_once "vendor/autoload.php";

class Single {

}

class Dependent {
    /**
     * @var Single
     */
    private $s;
    public function __construct(Single $s)
    {
        $this->s = $s;
    }
}

use Aura\Di\Container;
use Aura\Di\Forge;
use Aura\Di\Config;

$di = new Container(new Forge(new Config));

$single = $di->newInstance('Single');
var_dump($single);

$dependent = $di->newInstance('Dependent'); // causes fatal error
var_dump($dependent);