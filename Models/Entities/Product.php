<?php

namespace Models\Entities;

class Product
{
    public string $table = "products";

    public int $id;
    public string $title;
    public string $description;
    public ?int $brand_id;
    public ?int $category_id;
    public ?int $price;
    public ?int $year;
    public ?int $quantity;
}
