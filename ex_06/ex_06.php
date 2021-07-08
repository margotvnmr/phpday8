<?php 

function remove_cookie($name) {
    setcookie($name, "", time() - 3600);
}

?>