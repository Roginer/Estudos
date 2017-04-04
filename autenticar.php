<?php
  //inicio validação
    $login=$_GET["login"];
    $password=$_GET["password"];

    echo "Login:=$login";
    echo "<br> Password:=$password";
    echo "<br>";
//se validadao
    include("cad_usu.php");

    foreach($clogin as $loginbd=>$pwd){
        echo "$login";
}
?>
