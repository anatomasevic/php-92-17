<?php include('../ucitavanje.php');
/*include('Postt.php');

if(isset($_POST['naslov'])){
    $post=new Postt();
    $post->naslov=mysqli_real_escape_string($conn,$_POST['naslov']);
    $post->tekst=mysqli_real_escape_string($conn,$_POST['tekst']);

    $naslov=$post->naslov;
    $tekst=$post->tekst;

    mysqli_query($conn,"INSERT INTO `post`(`naslov`, `tekst`) VALUES ('$naslov','$tekst')");
}*/

if(isset($_POST['naslov'])){
   $post = new Postt();
    //$naslov=$_POST['naslov'];
    //$tekst=$_POST['tekst'];
    $post->naslov=mysqli_real_escape_string($conn,$_POST['naslov']);
    $post->tekst=mysqli_real_escape_string($conn,$_POST['tekst']);
}else{
    return;
}
   // $naslov=$post->naslov;
   // $tekst=$post->tekst;
    $kom->unesiPost($post);






if(isset($_POST['name']))
{
    $name =$_POST['name'];
    $coment =$_POST['coment'];
    $sifra=$_POST['sifra'];
    
    
   mysqli_query($conn, "UPDATE `post` SET`naslov`='$name',`tekst`='$coment' WHERE id=$sifra");
   
    exit();

}
if(isset($_POST['edit_id']))
{
    
    $edit_id=$_POST['edit_id'];
   $dataget= mysqli_query($conn, "SELECT * FROM `post` WHERE id=$edit_id");
    $json=mysqli_fetch_array($dataget);
    echo json_encode($json);
    exit();

}

 ?>

