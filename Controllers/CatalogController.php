<?php

namespace Controllers;

use Exception;
use Models\Product;
use Tools\Exceptions\Renderer\InvalidLayoutException;
use Tools\Exceptions\Renderer\InvalidTemplateException;
use Tools\Exceptions\Storage\InvalidIDExcemption;
use Dialog\Logger;
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
        $this->modelLogger = new Logger("MODEL", '../storage/logs/model.log');
        $this->viewLogger = new Logger("RENDERER", '../storage/logs/renderer.log');
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
            $this->modelLogger->warning($IDExcemption->getMessage(), ['id'=>$id]);
        } catch (InvalidLayoutException $layoutException) {
            $this->viewLogger->warning($layoutException->getMessage(), ['layout'=>$this->layout]);
        } catch (InvalidTemplateException $templateException) {
            $this->viewLogger->warning($templateException->getMessage(), ['template'=>$template]);
        } catch (Exception $exception) {
        }
    }
}
