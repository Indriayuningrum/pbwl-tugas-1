<?php
namespace App;

class Artis extends Koneksi{


    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        
        $sql = "SELECT * FROM tb_artist";
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
        


        $sql = "INSERT INTO tb_artist VALUES (NULL, :art_name)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":art_name", $i_nama);
        $stmt->execute();


    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_artist WHERE art_id=:art_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":art_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $i_nama = $_POST['i_nama'];
        $i_id = $_POST['i_id'];


        $sql = "UPDATE tb_artist SET art_name=:art_name  WHERE art_id=:art_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":art_name", $i_nama);
        $stmt->bindParam(":art_id", $i_id);
        $stmt->execute();


    }
}