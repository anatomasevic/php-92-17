<?php include('header.php');

?>

    
    <div class="container">
    
<div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control">
</div>
<div class="form-group">
            <label>Sifra</label>
            <input type="password" name="pass" id="pass" class="form-control">
</div>
<div class="form-group">
            
            <input type="submit"  name="submit" value="Prijava" id="submit" class="btn btn-primary">
</div>
</div>


  
<?php include('footer.php');?>
<script type="text/javascript">

$("#submit").click(function(event){
    email = document.getElementById("email").value;
    pass = document.getElementById("pass").value;

    
   
    if(email=="" || pass=="")
    alert('polja ne smeju da budu prazna');
    else{
    
     
     $.ajax({
        url:"login_ajax.php",
        type:"POST",
        async: false,
        data:{email:email,pass:pass},
        success:function(data){
            if(data=="success"){
                window.location="../php-92-17/admin/index.php";

            }else{
                alert(data);
            } 
            
          
       
            }
    

});

}
});         
</script>
