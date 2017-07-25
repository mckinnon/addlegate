<?php 
include '../addlegate_config.php'; 
$token = preg_replace('/[0-9]/','', $id);
header('Content-type: text/javascript');
$adlock_js = 'window.onload = function() {document.getElementById("' . $token . '").style = "display: none;"}' . "\n";
echo $adlock_js;
?>