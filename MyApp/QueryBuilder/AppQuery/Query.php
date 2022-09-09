<?php

namespace MyApp\QueryBuilder\AppQuery;

use MyApp\Database\DbConfig\DbObject;
use PDO;

class Query
{
    private $pdo_conn = null;
    private $pdo_close = null;
    private $response = null;

    public $data = null;

    private const FETCH_TYPE = [
        'FETCH_ASSOC' => PDO::FETCH_ASSOC,
        'FETCH_BOTH' => PDO::FETCH_BOTH,
        'FETCH_LAZY' => PDO::FETCH_LAZY,
        'FETCH_NAMED' => PDO::FETCH_NAMED,
        'FETCH_NUM' => PDO::FETCH_NUM,
        'FETCH_OBJ' => PDO::FETCH_OBJ
    ];

    public function __construct()
    {
        $this->response = [];
        $this->pdo_conn = (new DbObject())->openConnect();
        $this->pdo_close = (new DbObject())->closeConnect();
    }
    /**
     * @param string $str_sql
     * @param array $input_data
     * @return boolean
     */
    public function insert(string $str_sql, array $input_data): bool
    {
        $stmt = $this->pdo_conn->prepare($str_sql);
        return ($stmt->execute($input_data)) ? true : false;
    }
    /**
     * @param string $str_sql
     * @param array $input_data
     * @param string $fetch_option
     * @return array
     */
    public function select(string $str_sql, array $input_data = [], string $fetch_option = 'FETCH_OBJ'): array
    {
        $stmt = $this->pdo_conn->prepare($str_sql);
        $stmt->execute($input_data);
        $data = $stmt->fetchAll(self::FETCH_TYPE[$fetch_option]);
        $this->pdo_conn->beginTransaction();

        foreach ($data as $row) {
            array_push($this->response, $row);
        }

        $this->pdo_close;
        return $this->response;
    }
    /**
     * @param string $str_sql
     * @param array $input_data
     * @return boolean
     */
    public function update(string $str_sql, array $input_data): bool
    {
        $stmt = $this->pdo_conn->prepare($str_sql);
        return ($stmt->execute($input_data)) ? true : false;
    }
    /**
     * @param string $str_sql
     * @param array $input_data
     * @param boolean $MULTIPLE_DELETE
     * @return boolean
     */
    public function delete(string $str_sql, array $input_data = [], bool $MULTIPLE_DELETE = false): bool
    {
        $resultQuery = null;

        if ($MULTIPLE_DELETE == false) {
            $stmt = $this->pdo_conn->prepare($str_sql);
            $resultQuery = ($stmt->execute($input_data)) ? true : false;
        } else {
            $stmt = $this->pdo_conn->prepare($str_sql);
            $resultQuery = ($stmt->execute()) ? true : false;
        }

        return $resultQuery;
    }
    /**
     * @param string $str_sql
     * @param array $input_data
     * @param string $fetch_option
     * @return array
     */
    public function innerJoin(string $str_sql, array $input_data = [], string $fetch_option = 'FETCH_OBJ'): array
    {
        $stmt = $this->pdo_conn->prepare($str_sql);
        $stmt->execute($input_data);
        $data = $stmt->fetchAll(self::FETCH_TYPE[$fetch_option]);
        $this->pdo_conn->beginTransaction();

        foreach ($data as $row) {
            array_push($this->response, $row);
        }

        $this->pdo_close;
        return $this->response;
    }
}
