<?php
if (!isset($_COOKIE["name"])) {
    setcookie("name", "platypus");
}
if (isset($_GET['name'])) {
    $NAME = $_GET['name'];
    if ($NAME) {
        setcookie("name", $NAME);
    }
}
echo "Hello ".$_COOKIE["name"];
?>