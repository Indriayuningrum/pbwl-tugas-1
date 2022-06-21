<?php

$track = new App\Track();

$rows = $track->tampil();


?>

<h2>Data Track</h2>

<a href="index.php?page=track_input">Tambah</a>
<table>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>ALBUM</th>
        <th>TIME</th>
        <th>EDIT</th>
        <th>HAPUS</th>
    </tr>

    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['trc_id'];?></td>
        <td><?php echo $row['trc_name'];?></td>
        <td><?php echo $row['alb_id'];?> - <?php echo $row['alb_name'];?></td>
        <td><?php echo $row['trc_waktu'];?></td>
        <td><a href="index.php?page=track_edit&id=<?php echo $row['trc_id'];?>">Edit</a></td>
        <td><a href="track_tampil.php?hapus=<?php echo $row['trc_id'];?>">Hapus</a></td>
    </tr>
    
    <?php } ?>
</table>