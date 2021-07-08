<?php
session_start();
if(!isset($_SESSION["name"]))
    $_SESSION["name"] = "platypus";
if (isset($_GET['name'])) {
    $NAME = $_GET['name'];
    if ($NAME) {
        $_SESSION["name"] = $NAME;
    }
}
echo "Hello ".$_SESSION["name"];
?>