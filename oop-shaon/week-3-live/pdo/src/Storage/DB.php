<?php

declare(strict_types=1);

namespace App\Storage;

use PDO;

class DB
{
    private string $hostName = "localhost";
    private string $dataBaseName = "career_path";
    private string $userName = "root";
    private string $password = "";

    private PDO $conn;
    public function __construct()
    {

        try {
            $this->conn = new PDO("mysql:host=$this->hostName;dbname=$this->dataBaseName", $this->userName, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function createTable(string $sql, string $tableName)
    {
       try {
            $this->conn->exec($sql);
            echo "{$tableName} created successfully";
        } catch (PDOException $e) {
            echo "Error creating table: " . $e->getMessage();
        }
    }
}
