<?php
namespace App;

class Track extends Koneksi{


    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        
        $sql = "SELECT tb_track.*, tb_album.* FROM tb_track, tb_album WHERE tb_track.trc_id_album=tb_album.alb_id";
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
        $i_nama = $_POST['i_nama'];
        $i_id_album = $_POST['i_id_album'];
        $i_waktu = $_POST['i_waktu'];
        


        $sql = "INSERT INTO tb_track VALUES (NULL, :trc_name, :trc_id_album, :trc_waktu)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":trc_name", $i_nama);
        $stmt->bindParam(":trc_id_album", $i_id_album);
        $stmt->bindParam(":trc_waktu", $i_waktu);
        $stmt->execute();


    }
}