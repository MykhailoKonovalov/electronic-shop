<?php

namespace Framework\Tools;

use Framework\Tools\Exceptions\Renderer\InvalidTemplateException;
use Framework\Tools\Exceptions\Renderer\InvalidLayoutException;

class TemplateRenderer
{
    /**
     * @param string $template
     * @param string $layout
     * @param array|null $data
     * @throws InvalidTemplateException
     * @throws InvalidLayoutException
     */
    public function render(string $template, string $layout, $data = null)
    {
        $templatePath = '../../App/Views/templates/';
        $layoutPath = '../../App/Views/layouts/';
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
