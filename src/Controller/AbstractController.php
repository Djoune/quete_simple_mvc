<?php

/**
 * Abstract Controller file
 *
 * PHP Version 7.2
 *
 * @category Controller
 * @package  Abstract
 */

namespace Controller;

use Twig_Loader_Filesystem;
use Twig_Environment;

/**
 * Abstract class controller.
 *
 * @category Controller
 * @package  Abstract
 */
abstract class AbstractController {
    /**
     * Twig environment
     *
     * @var Twig_Environment
     */
    protected $twig;

    /**
     *  Initializes this class
     */
    public function __construct() {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }
}