<?php

$artis = new App\Artis();

$rows = $artis->tampil();

?>

<h2>Data Artis</h2>

<a href="index.php?page=artis_input">Tambah</a>
<table>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>EDIT</th>
    </tr>

    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['art_id'];?></td>
        <td><?php echo $row['art_name'];?></td>
        <td><a href="index.php?page=artis_edit&id=<?php echo $row['art_id'];?>">Edit</a></td>
    </tr>
    
    <?php } ?>
</table>