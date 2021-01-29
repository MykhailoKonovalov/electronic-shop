<?php


namespace Models;


use Tools\Exceptions\Storage\InvalidIDExcemption;
use Tools\Logger\Logger;


class Product
{
    /**
     * @var false|string
     */
    private $data;
    /**
     * @var Logger
     */
    public Logger $logger;

    public function __construct ($logger)
    {
        $this->data = file_get_contents("../Database/products.txt");
        $this->logger = $logger;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        $patterns = array("{", "}");
        $products = str_replace($patterns, "", explode("},", $this->data));
        $data = [];
        $element = [];
        foreach ($products as $item) {
            array_push($data, explode(",", $item));
        }
        $products = [];
        foreach ($data as $datum) {
            foreach ($datum as $item) {
                array_push($element, explode(":", $item));
            }
            array_push($products, $element);
        }
        $result = [];
        $data = [];
        foreach ($products as $product) {
            foreach ($product as $value) {
                $data[trim($value[0])] = trim($value[1]);
            }
            array_push($result, $data);
        }
        return $result;
    }

    public function getById($id) : array
    {
        $products = $this->getData();
        $data = [];
        foreach ($products as $product) {
            if ($product["id"] == $id) {
                array_push($data, $product);
            }
        }
        if (!$data) {
            throw new InvalidIDExcemption("Incorrect id!", "404");
        }
        return $data;
    }
}