<?php
namespace App\Controllers;

use Slim\Container;

abstract class Controller {
    protected $container;

    public function __construct(Container $container) {
        $this->container = $container;
    }
}
