<?php

namespace Models;

use Tools\Exceptions\Storage\InvalidIDExcemption;
use Tools\Logger\Logger;

class ProductMapper
{
    /**
     * @var Logger
     */
    public Logger $logger;

    public function __construct($logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        $storage = new Storage();
        $dataArray = $storage->parseData("../Database/products.txt");
        $result = [];
        foreach ($dataArray as $item) {
            $product = new Product();
            $product->id = $item["id"];
            $product->title = $item["title"];
            $product->price = $item["price"];
            $product->image = $item["image"];
            $product->brand = $item["brand"];
            $product->category = $item["category"];
            $product->description = $item["description"];
            array_push($result, $product);
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
        if (!$products->$id) {
            throw new InvalidIDExcemption("Incorrect id!", "404");
        }
    }
}
