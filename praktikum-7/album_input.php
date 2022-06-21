<?php
$artis = new App\Artis();
$rows = $artis->tampil();
?>

<h2>Tambah Data Album</h2>

<form action="album_proses.php" method="POST">
<table>
    <tr>
        <td>ARTIS</td>
        <td>
            <select name="i_id_artist">
             <?php foreach ($rows as $row) { ?>
                <option value="<?php echo $row['art_id'];?>"><?php echo $row['art_name'];?></option>
                <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>NAMA</td>
        <td><input type="text" name=i_nama></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="b_input" value="SIMPAN"></td>
    </tr>
</table>
</form>