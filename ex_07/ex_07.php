<?php
function modify_cookie($name, $val) {
    if (isset($_COOKIE[$name])) {
        setcookie($name, $val, time() + 36000);
    }
}
?>