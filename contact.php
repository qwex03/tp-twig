<?php
require_once("include/init_twig.php");
$json = file_get_contents('json/employes.json');
$employes = json_decode($json);
$twig = init_twig();

$template = $twig->load("contact.twig");

echo $template->render(['employes'=>$employes]);

?>