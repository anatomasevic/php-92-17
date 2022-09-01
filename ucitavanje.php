<?php
header('Access-Control-Allow-Origin: *');
    require("Postt.php");
    require("Komentar.php");
    require("Poruka.php");
    require("config.php"); 
    include("db.php"); 
    include("Komunikacija.php");
    $kom=new Komunikacija($conn);
    ?>