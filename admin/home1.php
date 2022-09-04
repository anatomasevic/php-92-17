<?php include('../ucitavanje.php');


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

