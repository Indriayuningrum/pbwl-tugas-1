<?php
$album = new App\Album();
$rows = $album->tampil();
?>

<h2>Tambah Data Track</h2>

<form action="track_proses.php" method="POST">
<table>
    <tr>    
        <td>NAMA</td>
        <td><input type="text" name=i_nama></td>
    </tr>
    <tr>
        <td>ALBUM</td>
        <td>
            <select name="i_id_album">
             <?php foreach ($rows as $row) { ?>
                <option value="<?php echo $row['alb_id'];?>"><?php echo $row['alb_name'];?></option>
                <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>TIME</td>
        <td><input type="decimal" name=i_waktu></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="b_input" value="SIMPAN"></td>
    </tr>
</table>
</form>