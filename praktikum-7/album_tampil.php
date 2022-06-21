<?php

$album = new App\Album();

$rows = $album->tampil();


?>

<h2>Data Album</h2>

<a href="index.php?page=album_input">Tambah</a>
<table>
    <tr>
        <th>NO</th>
        <th>ARTIS</th>
        <th>NAMA</th>
        <th>EDIT</th>
        <th>HAPUS</th>
    </tr>

    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['alb_id'];?></td>
        <td><?php echo $row['art_id'];?> - <?php echo $row['art_name'];?></td>
        <td><?php echo $row['alb_name'];?></td>
        <td><a href="index.php?page=album_edit&id=<?php echo $row['alb_id'];?>">Edit</a></td>
        <td><a href="album_tampil.php?hapus=<?php echo $row['alb_id'];?>">Hapus</a></td>
    </tr>
    
    <?php } ?>
</table>