<?php

namespace App\Controllers;

use Exception;
use Framework\Tools\Exceptions\Renderer\InvalidLayoutException;
use Framework\Tools\Exceptions\Renderer\InvalidTemplateException;
use Dialog\Logger;
use Framework\Tools\TemplateRenderer;

class MainController
{
    /**
     * @var Logger
     */
    private Logger $viewLogger;
    /**
     * @var TemplateRenderer
     */
    private TemplateRenderer $view;
    private string $layout;

    public function __construct()
    {
        $this->viewLogger = new Logger("RENDERER", '../../Framework/storage/logs/renderer.log');
        $this->view = new TemplateRenderer();
        $this->layout = "layout";
    }

    public function index()
    {
        $template = "main";
        try {
            $this->view->render($template, $this->layout);
        } catch (InvalidLayoutException $layoutException) {
            $this->viewLogger->warning($layoutException->getMessage(), ['layout'=>$this->layout]);
        } catch (InvalidTemplateException $templateException) {
            $this->viewLogger->warning($templateException->getMessage(), ['template'=>$template]);
        } catch (Exception $exception) {
        }
    }
}
