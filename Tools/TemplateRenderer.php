<?php

namespace Tools;

use Tools\Exceptions\Renderer\InvalidLayoutException;
use Tools\Exceptions\Renderer\InvalidTemplateException;
use Tools\Logger\Logger;

class TemplateRenderer
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
     * @param string $template
     * @param string $layout
     * @param array|null $data
     * @throws InvalidTemplateException
     * @throws InvalidLayoutException
     */
    public function render(string $template, string $layout, $data = null)
    {
        $templatePath = '../Views/templates/';
        $layoutPath = '../Views/layouts/';
        ob_start();
        if (file_exists($templatePath . $template . '.php')) {
            require_once $templatePath . $template . '.php';
        } else {
            throw new InvalidTemplateException("Template not found!");
        }
        $content = ob_get_clean();
        if (file_exists($layoutPath . $layout . '.php')) {
            require_once $layoutPath . $layout . '.php';
        } else {
            throw new InvalidLayoutException("Layout not found!");
        }
    }
}
