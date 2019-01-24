<?php
$htmlContent = file_get_contents("../index.php");

$DOM = new DOMDocument();
libxml_use_internal_errors(true);
$DOM->loadHTML($htmlContent);


?>
