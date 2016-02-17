<?php
/**
 * Created by PhpStorm.
 * User: webdev
 * Date: 2/15/16
 * Time: 1:50 PM
 */

require 'vendor/autoload.php';



$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

echo $twig->render('mainpage.twig');

//$layout = $twig->loadTemplate('base.html.twig');
//$twig->display('base_child_1.html.twig');