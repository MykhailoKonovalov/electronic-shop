<?php

namespace Framework\Database;

use PDO;
use Framework\Tools\Exceptions\Storage\InvalidIDExcemption;

class Mapper extends QueryBuilder
{
    private \PDO $conn;
    protected string $table;
    private $entity;

    public function __construct($entity)
    {
        $this->entity = $entity;
        $this->table = $entity->table;
        $instance = Database::getInstance();
        $this->conn = $instance->getConnection();
    }

    public function get($id = null)
    {
        if (is_null($id)) {
            $conditions = $this->query ?? '';
            $query = "SELECT * FROM $this->table $conditions";
            $funcName = "fetchAll";
            $sql = $this->conn->prepare($query);
        } else {
            $query = "SELECT * FROM $this->table WHERE `id` = :id";
            $funcName = "fetch";
            $sql = $this->conn->prepare($query);
            $sql->bindParam(":id", $id);
        }
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_CLASS, get_class($this->entity));
        $this->entity = $sql->$funcName();
        $json = json_encode($this->entity);
        if (empty($this->entity)) {
            throw new InvalidIDExcemption("Invalid ID");
        } else {
            return ($json);
        }
    }

    public function save($id = null): bool
    {
        $values = (array) get_object_vars($this->entity);
        unset($values["table"]);
        $keys = array_keys($values);
        if (is_null($id)) {
            $keys = implode(', ', $keys);
            $values = "'" . implode("', '", $values) . "'";
            $sql = $this->conn->prepare("INSERT INTO $this->table ($keys) VALUES ($values)");
        } else {
            if ($this->get($id)) {
                $params = "";
                for ($i = 0; $i < count($values); $i++) {
                    $params .= $keys[$i] . " = '" . $values[$keys[$i]] . "', ";
                }
                $params = rtrim($params, ', ');
                $query = "UPDATE $this->table SET $params WHERE id = :id";
                $sql = $this->conn->prepare($query);
                $sql->bindParam(":id", $id);
            }
        }
        if ($sql->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id): bool
    {
        if ($this->get($id)) {
            $sql = $this->conn->prepare("DELETE FROM $this->table WHERE id = :id");
            $sql->bindParam(":id", $id);
            if ($sql->execute()) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function paginate($limit, $page = 1): array
    {
        $data = $this->get();
        $paginateData = [];
        for ($i = $limit * ($page - 1); $i < $page * $limit; $i++) {
            if (!empty($data[$i])) {
                $paginateData[] = $data[$i];
            }
        }
        return $paginateData;
    }
}
