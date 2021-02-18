<?php

namespace Framework\Database;

class QueryBuilder
{
    public string $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    public function sortBy(string $column, string $operator = 'ASC'): Mapper
    {
        if (!empty($this->query)) {
            $this->query .= " ORDER BY $column $operator";
        } else {
            $this->query = "ORDER BY $column $operator";
        }
        return $this;
    }

    public function where(string $param, string $operator, string $value): Mapper
    {
        if (!empty($this->query)) {
            $this->query .= " WHERE $param $operator $value";
        } else {
            $this->query = "WHERE $param $operator $value";
        }
        return $this;
    }

    public function orWhere(string $param, string $operator, string $value): Mapper
    {
        if (!empty($this->query)) {
            $this->query .= " OR $param $operator $value";
        } else {
            $this->query = "OR $param $operator $value";
        }
        return $this;
    }

    public function andWhere(string $param, string $operator, string $value): Mapper
    {
        if (!empty($this->query)) {
            $this->query .= " AND $param $operator $value";
        } else {
            $this->query = "AND $param $operator $value";
        }
        return $this;
    }
}
