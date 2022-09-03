<?php include('ucitavanje.php');

if($_POST['name']){
    $komentar = new Komentar();
    $komentar->ime=mysqli_real_escape_string($conn,$_POST["name"]);
    $komentar->komentar=mysqli_real_escape_string($conn,$_POST["coment"]);
    $komentar->postid=mysqli_real_escape_string($conn,$_POST["sifra"]);

    $kom->ubaciKomentar($komentar);

}
?>