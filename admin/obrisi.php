<?php include('../ucitavanje.php');

if(isset($_POST['id']))
{
    $id=$_POST['id'];
    $post= new Postt();
    $post->id=$id;
    $kom->obrisiPost($post);
   
}
?>