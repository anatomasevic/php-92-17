<?php 
include('db.php');


    if($_POST['email']){

        $email=$_POST['email'];
        $pass=$_POST['pass'];
      
       $data= mysqli_query($conn,"SELECT `id` FROM `admin` WHERE email='$email' AND pass='$pass'");
       $row=mysqli_num_rows($data);
       if($row>0){
          echo "success";
    
           exit(0);
       }else{
           $er="username ili sifra su pogresni";
           echo $er;
           exit(0);
       }
    }



?>