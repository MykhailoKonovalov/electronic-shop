<?php


namespace Controllers;


use Tools\Exceptions\Renderer\InvalidLayoutException;
use Tools\Exceptions\Renderer\InvalidTemplateException;
use Tools\Logger\Logger;
use Tools\TemplateRenderer;

class UserController
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
        $this->viewLogger = new Logger("temp_log.txt");
        $this->view = new TemplateRenderer($this->viewLogger);
        $this->layout = "layout";
    }

    public function signin() {
        $template = "signin";
        try {
            $this->view->render($template, $this->layout);
        } catch (InvalidLayoutException $layoutException) {
            $this->view->logger->warning($layoutException->getMessage(), ["layout" => $this->layout]);
        } catch (InvalidTemplateException $templateException) {
            $this->view->logger->warning($templateException->getMessage(), ["template" => $template]);
        } catch (Exception $exception) {
        }
    }

    public function signup() {
        $template = "signup";
        try {
            $this->view->render($template, $this->layout);
        } catch (InvalidLayoutException $layoutException) {
            $this->view->logger->warning($layoutException->getMessage(), ["layout" => $this->layout]);
        } catch (InvalidTemplateException $templateException) {
            $this->view->logger->warning($templateException->getMessage(), ["template" => $template]);
        } catch (Exception $exception) {
        }
    }
}