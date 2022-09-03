<?php include('../ucitavanje.php');

if(isset($_POST['id']))
{
    $id=$_POST['id'];
    $poruka= new Poruka();
    $poruka->id=$id;
    $kom->obrisiPoruku($poruka);
   
}
?>