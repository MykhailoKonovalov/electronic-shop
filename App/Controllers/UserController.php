<?php

namespace App\Controllers;

use Exception;
use Framework\Sessions\Authentication;
use Framework\Tools\Exceptions\Renderer\InvalidLayoutException;
use Framework\Tools\Exceptions\Renderer\InvalidTemplateException;
use Dialog\Logger;
use Framework\Tools\TemplateRenderer;

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
        $this->viewLogger = new Logger("RENDERER", '../../Framework/storage/logs/renderer.log');
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
            $this->viewLogger->warning($layoutException->getMessage(), ['layout'=>$this->layout]);
        } catch (InvalidTemplateException $templateException) {
            $this->viewLogger->warning($templateException->getMessage(), ['template'=>$template]);
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
            $this->viewLogger->warning($layoutException->getMessage(), ['layout'=>$this->layout]);
        } catch (InvalidTemplateException $templateException) {
            $this->viewLogger->warning($templateException->getMessage(), ['template'=>$template]);
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
            $this->viewLogger->warning($layoutException->getMessage(), ['layout'=>$this->layout]);
        } catch (InvalidTemplateException $templateException) {
            $this->viewLogger->warning($templateException->getMessage(), ['template'=>$template]);
        } catch (Exception $exception) {
        }
    }
}
