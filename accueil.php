<?php
require_once("include/init_twig.php");
$json = file_get_contents('json/produits.json');
$produits = json_decode($json);
$twig = init_twig();

$template = $twig->load("accueil.twig");

echo $template->render(['produits'=>$produits]);

?>