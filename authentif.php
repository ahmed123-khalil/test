<?php
include "index.html";
        if($_POST['login'] == "admin" && $_POST['pass'] == "admin"){
                header("location:session.php");
            }
 ?>
