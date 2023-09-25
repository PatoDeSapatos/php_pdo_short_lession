<?php 
    require "../Classes/Conn.php";
    require "../Classes/DbContact.php";

    echo "Carregando...";

    $dbContact = new DbContact();
    $dbContact->register( $_POST["nome"], $_POST["email"] );

    header( "Refresh: 1; url=../index.php" );
?>