<?php
echo "Fichier : chemin.php<br/>" ;
echo "<br/>";
 
echo "Le chemin relatif est :<br/>";
echo realpath('chemin.php'); 
echo "<br/>";
echo "<br/>";
 
echo "Le chemin absolu est :<br/>";
echo $_SERVER['PHP_SELF'];
?>
