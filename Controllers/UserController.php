<?php

namespace Controllers;

use Exception;
use Sessions\Authentication;
use Tools\Exceptions\Renderer\InvalidLayoutException;
use Tools\Exceptions\Renderer\InvalidTemplateException;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

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
        $this->viewLogger = new Logger("RENDERER");
        $this->viewLogger->pushHandler(new StreamHandler('../storage/renderer.log', Logger::DEBUG));
        $this->viewLogger->pushHandler(new FirePHPHandler());
        $this->view = new TemplateRenderer();
        $this->layout = "layout";
        $this->authentication = new Authentication();
    }

    public function profile()
    {
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
            $this->viewLogger->warning($layoutException->getMessage());
        } catch (InvalidTemplateException $templateException) {
            $this->viewLogger->warning($templateException->getMessage());
        } catch (Exception $exception) {
        }
    }

    public function logout()
    {
        $this->authentication->logOut();
        header("Location:/signin");
    }

    public function signin()
    {
        $template = "signin";
        try {
            if ($this->authentication->isAuth()) {
                header("Location:/profile");
            } else {
                $this->view->render($template, $this->layout);
            }
        } catch (InvalidLayoutException $layoutException) {
            $this->viewLogger->warning($layoutException->getMessage());
        } catch (InvalidTemplateException $templateException) {
            $this->viewLogger->warning($templateException->getMessage());
        } catch (Exception $exception) {
        }
    }

    public function signup()
    {
        $template = "signup";
        try {
            if ($this->authentication->isAuth()) {
                header("Location:/profile");
            } else {
                $this->view->render($template, $this->layout);
            }
        } catch (InvalidLayoutException $layoutException) {
            $this->viewLogger->warning($layoutException->getMessage());
        } catch (InvalidTemplateException $templateException) {
            $this->viewLogger->warning($templateException->getMessage());
        } catch (Exception $exception) {
        }
    }
}
