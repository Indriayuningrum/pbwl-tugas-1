<?php
namespace App;

class Album extends Koneksi{


    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        
        $sql = "SELECT tb_album.*, tb_artist.* FROM tb_album, tb_artist WHERE tb_album.alb_id_artist=tb_artist.art_id";
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
        $i_id_artist = $_POST['i_id_artist'];
        $i_nama = $_POST['i_nama'];
        


        $sql = "INSERT INTO tb_album VALUES (NULL, :alb_id_artist, :alb_name)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":alb_id_artist", $i_id_artist);
        $stmt->bindParam(":alb_name", $i_nama);
        $stmt->execute();


    }

   // public function edit($id)
    //{
      //  $sql = "SELECT * FROM tb_album WHERE alb_id=:alb_id";
       // $stmt = $this->db->prepare($sql);
        //$stmt->bindParam(":alb_id", $id);
        //$stmt->execute();

        //$row = $stmt->fetch();

        //return $row;
   // }

   // public function update()
    //{
        //$i_albidartist = $_POST['i_albidartist'];
       // $i_nama = $_POST['i_nama'];
        //$i_id = $_POST['i_id'];


        //$sql = "UPDATE tb_album SET alb_id_artist=:alb_id_artist, alb_name=:alb_name  WHERE alb_id=:alb_id";
        //$stmt = $this->db->prepare($sql);
        //$stmt->bindParam(":alb_id_artist", $i_albidartist);
        //$stmt->bindParam(":alb_name", $i_nama);
        //$stmt->bindParam(":alb_id", $i_id);
        //$stmt->execute();


    //}

   // public function delete($id)
    //{
       // $sql = "DELETE  FROM tb_album WHERE alb_id=:alb_id";
        //$stmt = $this->db->prepare($sql);
        //$stmt->bindParam(":alb_id", $id);
        //$stmt->execute();
    //}

    

}