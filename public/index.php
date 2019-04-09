<?php

require '../vendor/autoload.php';

$products = ['Chat', 'Tartine', 'Beurre', 'Confiture', 'Arc-en-ciel', 'NyanNyanNyan'];

$loader = new Twig_Loader_Filesystem('../src/View');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html.twig', array('products' => $products))
?>1