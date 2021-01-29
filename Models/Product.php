<?php


namespace Models;


use Tools\Exceptions\Storage\InvalidIDExcemption;
use Tools\Logger\Logger;

class Product
{
    public int $id;
    public string $title;
    public string $image;
    public string $description;
    public string $brand;
    public string $category;
    public string $price;

    /**
     * @var Logger
     */
    public Logger $logger;

    public function __construct ($logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return array
     */
    public function getData (): array
    {
        $storage = new Storage();
        $dataArray = $storage->parseData("../Database/products.txt");
        $result = [];
        foreach ($dataArray as $item) {
            $item = (object)$item;
            array_push($result, $item);
        }
        return $result;
    }

    public function getById($id) : Object
    {
        $products = $this->getData();
        foreach ($products as $product) {
            if ($product->id == $id) {
                return $product;
            }
        }
        if (!$product) {
            throw new InvalidIDExcemption("Incorrect id!", "404");
        }
    }
}