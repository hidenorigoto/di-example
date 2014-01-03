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

$di = new Zend\Di\Di();

$single = $di->newInstance('Single');
var_dump($single);

$dependent = $di->newInstance('Dependent');
var_dump($dependent);
