<?php

declare(strict_types=1);

namespace MyApp\Database\DbConfig;

use PDO;
use PDOException;

class DbObject
{
    private $servername = "";
    private $username = "";
    private $password = "";
    private $dbname = "";

    public $conn = null;
    /**
     * @method object construct()
     * @return object
     */
    public function __construct()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "bloodDonationDb";
    }
    /**
     * @return PDO
     */
    public function openConnect(): PDO
    {
        try {
            $this->conn = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $err) {
            return (object)['status' => 500, 'massage' => $err->getMessage()];
        }
    }
    /**
     * @return void
     */
    public function closeConnect(): void
    {
        $this->conn = null;
    }
}
