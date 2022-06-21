<?php

require_once "inc\config.php";

$album = new App\Album();

$id = $_GET['id'];


$row = $album->edit($id);

?>

<form action="album_proses.php" method="POST">
    <input type="hidden" name="i_id" value="<?php echo $id; ?>">
<table>
    <tr>
        <td>ALBUM ID ARTIS</td>
        <td><input type="int" name=i_albidartist value="<?php echo $row['alb_id_artist']; ?>"></td>

    </tr>
    <tr>
        <td>NAMA</td>
        <td><input type="text" name=i_nama value="<?php echo $row['alb_name']; ?>"></td>
    </tr>
    <tr>
    <tr>
        <td></td>
        <td><input type="submit" name="b_edit" value="UPDATE"></td>
    </tr>
</table>
</form>