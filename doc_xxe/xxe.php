<?php
// Désactivation du chargement des informations depuis des sources externes
libxml_disable_entity_loader(true);

$xmlfile = $_POST['xml_input'];

$dom = new DOMDocument();
// Arrêt du chargement
$dom->loadXML($xmlfile);

echo "<h1>Résultat:</h1>";

$result = simplexml_import_dom($dom);
echo $result;
?>