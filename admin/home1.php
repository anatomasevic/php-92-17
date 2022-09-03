<?php include('../ucitavanje.php');
/*include('Postt.php');

if(isset($_POST['naslov'])){
    $post=new Postt();
    $post->naslov=mysqli_real_escape_string($conn,$_POST['naslov']);
    $post->tekst=mysqli_real_escape_string($conn,$_POST['tekst']);

    $naslov=$post->naslov;
    $tekst=$post->tekst;

    mysqli_query($conn,"INSERT INTO `post`(`naslov`, `tekst`) VALUES ('$naslov','$tekst')");
}

if(isset($_POST['naslov'])){
  //  $post = new Postt();
    $naslov=$_POST['naslov'];
    $tekst=$_POST['tekst'];
    //$post->naslov=mysqli_real_escape_string($conn,$_POST['naslov']);
   // $post->tekst=mysqli_real_escape_string($conn,$_POST['tekst']);
  
   // $naslov=$post->naslov;
   // $tekst=$post->tekst;

    mysqli_query($conn,"INSERT INTO `post`(`naslov`, `tekst`) VALUES ('$naslov','$tekst')");
}



if(isset($_POST['id']))
{
    $id=$_POST['id'];
    mysqli_query($conn, "DELETE FROM `post` WHERE id=$id");
}

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

////////////////////
pre izmene i pretrage

$i=1;
$postovi=$kom->vratiSvePostove();
foreach($postovi as $post): ?>
<tr>
   
    <td><?php echo $i++;?></td>
    <td><?php echo $post->naslov;?></td>
    <td><?php echo $post->tekst;?></td>

    <td><?php echo $post->datum;?></td>
    <td>
    
        <button onclick="del('<?php echo $post->id;?>')">Obrisi</button>
        <button onclick="edit('<?php echo $post->id;?>')">Izmeni</button>

</td>

<tr>
<?php endforeach; ?>



/////////////

if(_POST['search']==''){
    $postovi=$kom->vratiSvePostove();
}else{

    $postovi=$kom->pretraziPost($_POST['search']);
}

if(count($postovi)>0){
    foreach($postovi as $post): ?>
        <!-- Post preview-->
        <div class="post-preview">
            <a href="osnepost1.php?id=<?= $post->id?>&naslov=<?= $post->naslov?>">
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
        <?php endforeach; 
}else{
    echo "Ne postoji takav post";
}


//////////////////////////////////////////////


$i=1;
if($_POST['name']==''){
    $postovi=$kom->vratiSvePostove();
}else{

    $postovi=$kom->pretraziPost($_POST['name']);
}

if(count($postovi)>0){

foreach($postovi as $post): ?>
<tr>
   
    <td><?php echo $i++;?></td>
    <td><?php echo $post->naslov;?></td>
    <td><?php echo $post->tekst;?></td>

    <td><?php echo $post->datum;?></td>
    <td>
    
        <button onclick="del('<?php echo $post->id;?>')">Obrisi</button>
        <button onclick="edit('<?php echo $post->id;?>')">Izmeni</button>

</td>

<tr>
<?php endforeach; 
}else{
    echo "Ne postoji takav post";
}
?> 
?> 


*/

$i=1;
$postovi=$kom->vratiSvePostove();
foreach($postovi as $post): ?>
<tr>
   
    <td><?php echo $i++;?></td>
    <td><?php echo $post->naslov;?></td>
    <td><?php echo $post->tekst;?></td>

    <td><?php echo $post->datum;?></td>
    <td>
    
        <button onclick="del('<?php echo $post->id;?>')">Obrisi</button>
        <button onclick="edit('<?php echo $post->id;?>')">Izmeni</button>

</td>

<tr>
<?php endforeach; ?>

