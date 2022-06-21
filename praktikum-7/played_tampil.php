<?php

$played = new App\Played();

$rows = $played->tampil();


?>

<h2>Data Played</h2>

<a href="index.php?page=played_input">Tambah</a>
<table>
    <tr>
        <th>NO</th>
        <th>TRACK</th>
        <th>PLAYED</th>
        <th>EDIT</th>
        <th>HAPUS</th>
    </tr>

    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['ply_id'];?></td>
        <td><?php echo $row['trc_id'];?> - <?php echo $row['trc_name'];?></td>
        <td><?php echo $row['ply_played'];?></td>
        <td><a href="index.php?page=played_edit&id=<?php echo $row['ply_id'];?>">Edit</a></td>
        <td><a href="played_tampil.php?hapus=<?php echo $row['ply_id'];?>">Hapus</a></td>
    </tr>
    
    <?php } ?>
</table>