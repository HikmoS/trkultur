<?php
require_once("uncludes/config.php");
?>
<?php

$veri = $db->query("select * from haber") -> fetch();
echo $veri["HaberBaslik"];


?>