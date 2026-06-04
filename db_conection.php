<?php

class db_conection
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "db_siakad";

    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->database
        );

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }
}
?>