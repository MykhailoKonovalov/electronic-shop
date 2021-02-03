<?php

namespace Models;

use Tools\Exceptions\Storage\InvalidIDExcemption;

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
     * @return array
     */
    public function getData() : array
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

    public function getById($id) : Product
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
