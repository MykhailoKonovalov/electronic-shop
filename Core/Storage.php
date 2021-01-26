<?php


namespace Core;


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
     */
    public function getById (int $id) : array
    {
        foreach ($this->products as $product) {
            if ($product["id"] == $id) {
                return [$product];
            }
        }
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