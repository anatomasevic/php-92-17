<?php 
include('ucitavanje.php');
include('headerpost.php');
//include('add_coment.php');


$id=$_GET['id'];

?>
    <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
    <?php   $post=$kom->vratiJedanPost($id);
                ?>
       
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title"></h2>
                            <h3 class="post-subtitle"><?php echo $post->tekst?></h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Admin</a>
                            <?php echo $post->datum?>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Dodaj komentar
</button>
                        </p>
                    </div>

                    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dodaj komentar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form width="50%" method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Korisnicko ime</label>
    <input type="email" class="form-control" name="name" id="name" aria-describedby="emailHelp">
    
    <input type="hidden" class="form-control" name="sifra" id="sifra" value=<?php echo $id?> aria-describedby="emailHelp">
        
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Komentar</label>
    <input type="email" class="form-control" name="coment" id="coment" aria-describedby="emailHelp">
  </div>
 
  
</form>
      </div>
      <div class="modal-footer">
   
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Komentarisi</button>
      </div>
    </div>
  </div>
</div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <h2 class="post-title">Komentari</h2>
                    <hr class="my-4" />
                    <?php   
$komentari=$kom->prikaziKomentare($id);  
  

    
  
  
   foreach($komentari as $komentar): ?>
                
       
                    <!-- Post preview-->
                    <div class="card-body">
                       
                            <h5 class="" style="margin-bottom: 0;"><?php echo $komentar->ime;?></h4>
                            <p class="card-text"><?php echo $komentar->komentar?></h5>
                       
                       
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />

                    <?php endforeach; ?> 

                    


                    

    <?php include('footer.php');?> 
    <script type="text/javascript">

$("#submit").click(function(){
    var name =$("#name").val();
    var coment =$("#coment").val();
    //var sifra =$("#sifra").val();
    var sifra= $("#sifra").val();
   
   
    

    
     
     $.ajax({
        url:"add_coment1.php",
        type:"POST",
        data:{name:name,coment:coment,sifra:sifra},
        success:function(data){
          
         //window.location="http://localhost:8081/iteh_php_92_17/onepost1.php?id="<?php= $id?">;
            
            
          $("#name").val();
            $("coment").val();
            $("sifra").val();
	
	alert("uspenso ubacen komentar");
           
        }

    });
   
});
</script>