<?php include('ucitavanje.php');

if($_POST['name']){
    $poruka = new Poruka();
    $poruka->ime=mysqli_real_escape_string($conn,$_POST["name"]);
    $poruka->email=mysqli_real_escape_string($conn,$_POST["email"]);
    $poruka->poruka=mysqli_real_escape_string($conn,$_POST["message"]);

    $kom->ubaciPoruku($poruka);

}
?>