<?php

require_once "inc\config.php";

$artis = new App\Artis();

$id = $_GET['id'];


$row = $artis->edit($id);

?>

<form action="artis_proses.php" method="POST">
    <input type="hidden" name="i_id" value="<?php echo $id; ?>">
<table>
    <tr>
        <td>NAMA</td>
        <td><input type="text" name=i_nama value="<?php echo $row['art_name']; ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="b_edit" value="UPDATE"></td>
    </tr>
</table>
</form>