<?php
require_once 'db_conection.php';

class Perkuliahan extends db_conection
{
    public function getData()
    {
        $sql = "SELECT * FROM perkuliahan";
        $result = $this->conn->query($sql);

        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }
}