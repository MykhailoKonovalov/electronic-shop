<?php


namespace Controllers;


use Exception;
use Sessions\Authentication;
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
    /**
     * @var Authentication
     */
    public Authentication $authentication;

    public function __construct()
    {
        $this->viewLogger = new Logger("temp_log.txt");
        $this->view = new TemplateRenderer($this->viewLogger);
        $this->layout = "layout";
        $this->authentication = new Authentication();
    }

    public function profile() {
        $template = "profile";
        try {
            $this->authentication->auth($_POST["email"], $_POST["password"]);
            if ($this->authentication->isAuth()) {
                $login = $this->authentication->getLogin();
                $this->view->render($template, $this->layout, $login);
            } else {
                header("Location:/signin");
            }
        } catch (InvalidLayoutException $layoutException) {
            $this->view->logger->warning($layoutException->getMessage(), ["layout" => $this->layout]);
        } catch (InvalidTemplateException $templateException) {
            $this->view->logger->warning($templateException->getMessage(), ["template" => $template]);
        } catch (Exception $exception) {
        }
    }

    public function logout () {
        $this->authentication->logOut();
        header("Location:/signin");
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