<!DOCTYPE html>
<htlm>
    <body>
    <?php
    if (isset($_POST["name"])){
        echo "Hello " . $_POST["name"];
    }
else{
    ?>
    <form action="" method="post">
    <input type="text" name="name" />
    <input type="submit" value="Submit"/>
</form>
<?php
}
?>
</body>
</htlm>