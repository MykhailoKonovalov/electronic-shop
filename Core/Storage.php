<?php


namespace Core;

use Exceptions\Storage\InvalidIDExcemption;
use Exceptions\Storage\MissingParameterException;

class Storage
{
    /**
     * @var array
     */
    private array $products;

    public function __construct (array $products = [])
    {
        $this->products = $products;
    }

    /**
     * @return array
     */
    public function all () : array
    {
        return $this->products;
    }

    /**
     * @param int $id
     * @return array
     * @throws InvalidIDExcemption
     * @throws MissingParameterException
     */
    public function getById (int $id) : array
    {
        $data = [];
        foreach ($this->products as $product) {
            if ($product["id"] == $id) {
                array_push($data, $product);
            }
        }
        if (!$data) {
            throw new InvalidIDExcemption("Uncorrect id!");
        }
        return $data;
    }

    /**
     * @param string $sort
     * @return array
     */
    public function orderBy (string $sort) : array
    {
        usort($this->products, function ($item1, $item2) use ($sort) {
            return $item1[$sort] <=> $item2[$sort];
        });
        return $this->products;
    }

}