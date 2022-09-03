<?php include('../ucitavanje.php');


$i=1;
$poruke=$kom->prikaziPoruke();
foreach($poruke as $poruka): ?>
<tr>
   
    <td><?php echo $i++;?></td>
    <td><?php echo $poruka->ime;?></td>
    <td><?php echo $poruka->email;?></td>
    <td><?php echo $poruka->poruka;?></td>

    <td><?php echo $poruka->datum;?></td>
    <td>
    
        <button onclick="del('<?php echo $poruka->id;?>')">Obrisi</button>

</td>

<tr>
<?php endforeach; ?>