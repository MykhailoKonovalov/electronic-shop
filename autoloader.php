<?php

class Autoloader
{
    public function __invoke($className)
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) . ".php";
        if (file_exists($path)) {
            require $path;
        } else {
            echo "Class no required!";
        }
    }
}

spl_autoload_register(new Autoloader());
