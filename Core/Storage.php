<?php


namespace Core;

use Exceptions\Storage\InvalidIDExcemption;

class Storage
{
    /**
     * @var array
     */
    private array $products;
    /**
     * @var Logger\Logger
     */
    public Logger\Logger $logger;

    public function __construct (array $products = [], $logger)
    {
        $this->products = $products;
        $this->logger = $logger;
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
        $data = [];
            foreach ($this->products as $product) {
                if ($product["id"] == $id) {
                    array_push($data, $product);
                }
            }
            if (!$data) {
                throw new InvalidIDExcemption("Uncorrect id!", "404");
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