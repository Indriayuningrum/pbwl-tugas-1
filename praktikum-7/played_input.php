<?php
$track = new App\Track();
$rows = $track->tampil();
?>

<h2>Tambah Data Played</h2>

<form action="played_proses.php" method="POST">
<table>
    <tr>
        <td>TRACK</td>
        <td>
            <select name="i_id_track">
             <?php foreach ($rows as $row) { ?>
                <option value="<?php echo $row['trc_id'];?>"><?php echo $row['trc_name'];?></option>
                <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>PLAYED</td>
        <td><input type="timestamp" name=i_played></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="b_input" value="SIMPAN"></td>
    </tr>
</table>
</form>