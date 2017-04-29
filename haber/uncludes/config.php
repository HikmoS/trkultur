<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=news;charset=utf8", "root", "221233580h");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>