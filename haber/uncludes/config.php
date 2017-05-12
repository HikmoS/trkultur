<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=news;charset=utf8", "root", "123456");
} catch ( PDOException $e ){
     print $e->getMessage();
}
session_start();
?>
