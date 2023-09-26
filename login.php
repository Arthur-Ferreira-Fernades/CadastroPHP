<?php
 if ($_POST["login"] == "123" && $_POST["senha"] == "123") {
    header("location: cadastro.html");
    exit;
 } else {
    header("location: index.html");
    exit;
 }

?>