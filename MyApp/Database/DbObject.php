<?php

declare(strict_types=1);

namespace MyApp\Database;

use mysqli;

class DbObject
{
    private string $servername = "localhost";
    private string $username = "root";
    private string $password = "";
    private string $dbname = "bloodDonationDb";

    public $connResult = null;
    /**
     * @return object
     */
    public function openConnect(): object
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $this->connResult = $conn;
        return $this;
    }
    /**
     * @return void
     */
    public function closeConnect(): void
    {
        $this->connResult->close();
    }
}
