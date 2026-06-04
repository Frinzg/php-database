<?php
require_once 'db_conection.php';

class Mahasiswa extends db_conection
{
    public function getData()
    {
        $sql = "SELECT * FROM mahasiswa";
        $result = $this->conn->query($sql);

        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }
}