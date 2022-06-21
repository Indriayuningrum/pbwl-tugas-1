<?php

require_once "inc\config.php";

$track = new App\Track();
 
if(isset($_POST['b_input'])) {
    $track->input();

    header("location:index.php?page=track_tampil");

}