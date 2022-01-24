<?php
        if(isset($_POST['f']) && $_POST['login'] == "admin" && $_POST['pass'] == "admin"){
                header("location:session.php");
            }
 ?>

<html>
    <body>
        <h1>Authetification :</h1>
        <form action ="" Method = "POST">
       <p> Login : <input type="texte" name="login"> </p>
       <p>Password : <input type="password" name="pass">  </p>
       <p><input type="submit" value="authentif" name="f"> </p>
       </form>
    </body>
</html>