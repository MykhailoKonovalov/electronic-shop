<?php

namespace Controllers;

use Exception;
use Models\ProductMapper;
use Tools\Exceptions\Renderer\InvalidLayoutException;
use Tools\Exceptions\Renderer\InvalidTemplateException;
use Tools\Exceptions\Storage\InvalidIDExcemption;
use Tools\Logger\Logger;
use Tools\TemplateRenderer;

class CatalogController
{
    /**
     * @var ProductMapper
     */
    public ProductMapper $model;
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
        $this->modelLogger = new Logger("data_log.txt");
        $this->viewLogger = new Logger("temp_log.txt");
        $this->model = new ProductMapper($this->modelLogger);
        $this->view = new TemplateRenderer($this->viewLogger);
        $this->layout = "layout";
    }

    public function index()
    {
        $template = "catalog";
        try {
            $data = $this->model->getData();
            $this->view->render($template, $this->layout, $data);
        } catch (InvalidLayoutException $layoutException) {
            $this->view->logger->warning($layoutException->getMessage(), ["layout" => $this->layout]);
        } catch (InvalidTemplateException $templateException) {
            $this->view->logger->warning($templateException->getMessage(), ["template" => $template]);
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
            $this->model->logger->warning($IDExcemption->getMessage(), ["id" => $id]);
        } catch (InvalidLayoutException $layoutException) {
            $this->view->logger->warning($layoutException->getMessage(), ["layout" => $this->layout]);
        } catch (InvalidTemplateException $templateException) {
            $this->view->logger->warning($templateException->getMessage(), ["template" => $template]);
        } catch (Exception $exception) {
        }
    }
}
