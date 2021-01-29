<?php


namespace Models;

class Storage
{
    /**
     * @param $fileName
     * @return array
     */
    public function parseData($fileName) : array
    {
        $file = file_get_contents($fileName);
        $patterns = array("{", "}");
        $products = str_replace($patterns, "", explode("},", $file));
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
}