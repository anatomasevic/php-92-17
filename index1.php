<?php
include 'ucitavanje.php';
include('header.php');

?>
<div class="container mt-2">
    <form action="" method="GET">
    
               
               
                   <div class="mb-2">
                    <label>
                                       <input type="radio" name ="sort_numeric" value="najnoviji"  <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "najnoviji") { echo "selected"; } ?> >najnoviji
                               
</label >
                                <label>
                                       <input type="radio" name ="sort_numeric" value="njastariji" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "njastariji") { echo "selected"; } ?> >najstariji
</label>  
                                       
                                       <button type="submit" class="input-group-text btn btn-primary" id="basic-addon2">
                                            Sortiraj
                                        </button>
                                    </div>
                                
                                
                           
                        </form>
                        </div>
   <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
    
 <!--
           <div class="container">
               <br/>
               <div class="form-group">
                   <div class="input-group">
                   <button type="submit" name="submit" id="submit" class="btn btn-primary">Pretrazi</button>

                       <input type="text" name="search" id="search" placeholder="Pretrazite prema naslovu posta" class="form-control"/>
</div>
</div>
<br />
<div id="result"></div>
</div>  -->



<script type="text/javascript">
/*$(document).ready(function(){
    $("search").keypress(function(){
        $.ajax({
            type:'POST',
            url:"pretraga.php"
            data:{
                search:$("#search").val()
            },
            success:function(data)
        })
    })
})

$("#submit").click(function(){
    var search =$("#search").val();
    
     $.ajax({
        url:"pretraga.php",
        type:"POST",
        data:{search:search},
        success:function(data){
          
         
alert(search);            

           
        }

    });
   
});*/
</script>
    <?php 

    

$sort_option = "";
if(isset($_GET['sort_numeric']))
{
    if($_GET['sort_numeric'] == "najnoviji"){
        $sort_option = "DESC";
    }elseif($_GET['sort_numeric'] == "njastariji"){
        $sort_option = "ASC";
    }
}
  
$postovi=$kom->sortirajPostove($sort_option);  
  

    
  
  
   foreach($postovi as $post): ?>
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="onepost1.php?id=<?= $post->id?>&naslov=<?= $post->naslov?>">
                            <h2 class="post-title"><?php echo $post->naslov?></h2>
                            <h3 class="post-subtitle"><?php echo $post->tekst?></h3>
                        </a>
                     <!--   <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            <?php echo $post->datum?>
                        </p>-->
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <?php endforeach; ?>  
    <?php include('footer.php');?> 