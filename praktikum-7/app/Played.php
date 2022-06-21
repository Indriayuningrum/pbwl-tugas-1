<?php
namespace App;

class Played extends Koneksi{


    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        
        $sql = "SELECT tb_played.*, tb_track.* FROM tb_played, tb_track WHERE tb_played.ply_id_track=tb_track.trc_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] =$rows;
        }

        return $data;
    }

    public function input()
    {
        $i_id_track = $_POST['i_id_track'];
        $i_played = $_POST['i_played'];
        


        $sql = "INSERT INTO tb_played VALUES (NULL, :ply_id_track, :ply_played)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ply_id_track", $i_id_track);
        $stmt->bindParam(":ply_played", $i_played);
        $stmt->execute();


    }
}