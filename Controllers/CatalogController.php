<?php

namespace Controllers;

use Exception;
use Models\Product;
use Monolog\Handler\FirePHPHandler;
use Monolog\Handler\StreamHandler;
use Tools\Exceptions\Renderer\InvalidLayoutException;
use Tools\Exceptions\Renderer\InvalidTemplateException;
use Tools\Exceptions\Storage\InvalidIDExcemption;
//use Tools\Logger\Logger;
use Monolog\Logger;
use Tools\TemplateRenderer;

class CatalogController
{
    /**
     * @var Product
     */
    public Product $model;
    /**
     * @var Logger
     */
    public Logger $modelLogger;
    public Logger $viewLogger;
    /**
     * @var TemplateRenderer
     */
    private TemplateRenderer $view;
    private string $layout;

    public function __construct()
    {
        $this->modelLogger = new Logger("MODEL");
        $this->viewLogger = new Logger("RENDERER");
        $this->viewLogger->pushHandler(new StreamHandler('../storage/logs/renderer.log', Logger::WARNING));
        $this->viewLogger->pushHandler(new FirePHPHandler());
        $this->modelLogger->pushHandler(new StreamHandler('../storage/logs/model.log', Logger::WARNING));
        $this->modelLogger->pushHandler(new FirePHPHandler());
        $this->model = new Product();
        $this->view = new TemplateRenderer();
        $this->layout = "layout";
    }

    public function index()
    {
        $template = "catalog";
        try {
            $data = $this->model->getData();
            $this->view->render($template, $this->layout, $data);
        } catch (InvalidLayoutException $layoutException) {
            $this->viewLogger->warning('Layout does not exist');
        } catch (InvalidTemplateException $templateException) {
            $this->viewLogger->warning('Template does not exist');
        } catch (Exception $exception) {
        }
    }

    public function show()
    {
        $template = "product";
        $id = $_GET["id"];
        try {
            $data = $this->model->getById($id);
            $this->view->render($template, $this->layout, $data);
        } catch (InvalidIDExcemption $IDExcemption) {
            $this->modelLogger->warning('Invalid ID!');
        } catch (InvalidLayoutException $layoutException) {
            $this->viewLogger->warning('Layout does not exist');
        } catch (InvalidTemplateException $templateException) {
            $this->viewLogger->warning('Template does not exist');
        } catch (Exception $exception) {
        }
    }
}
