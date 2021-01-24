<?php

namespace Core;

class TemplateRenderer
{
    public function render(string $template, string $layout, array $data = null) {

        $templatePath = '../View/templates/';
        $layoutPath = '../View/layouts/';
        ob_start();
        if (file_exists($templatePath . $template . '.php')) {
            require_once $templatePath . $template . '.php';
        } else {
            echo "Template not exist";
        }
        $content = ob_get_clean();
        if (file_exists($layoutPath . $layout . '.php')) {
            require_once $layoutPath . $layout . '.php';
        } else {
            echo "Layout not exist";
        }
    }
}