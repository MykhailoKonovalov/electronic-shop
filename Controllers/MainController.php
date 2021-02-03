<?php

namespace Controllers;

use Exception;
use Tools\Exceptions\Renderer\InvalidLayoutException;
use Tools\Exceptions\Renderer\InvalidTemplateException;
//use Tools\Logger\Logger;
use Tools\TemplateRenderer;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

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
        $this->viewLogger = new Logger("RENDERER");
        $this->viewLogger->pushHandler(new StreamHandler('../storage/logs/renderer.log', Logger::WARNING));
        $this->viewLogger->pushHandler(new FirePHPHandler());
        $this->view = new TemplateRenderer();
        $this->layout = "layout";
    }

    public function index()
    {
        $template = "main";
        try {
            $this->view->render($template, $this->layout);
        } catch (InvalidLayoutException $layoutException) {
            $this->viewLogger->warning('Layout does not exist');
        } catch (InvalidTemplateException $templateException) {
            $this->viewLogger->warning('Template does not exist');
        } catch (Exception $exception) {
        }
    }
}
