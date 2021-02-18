<?php

namespace App\Controllers;

use Exception;
use App\Models\Entities\Product;
use App\Models\Mappers\ProductMapper;
use Framework\Tools\Exceptions\Renderer\InvalidLayoutException;
use Framework\Tools\Exceptions\Renderer\InvalidTemplateException;
use Framework\Tools\Exceptions\Storage\DeleteErrorException;
use Framework\Tools\Exceptions\Storage\InvalidIDExcemption;
use Dialog\Logger;
use Framework\Tools\Exceptions\Storage\SaveErrorException;
use Framework\Tools\TemplateRenderer;

class CatalogController
{
    /**
     * @var Logger
     */
    public Logger $viewLogger;
    /**
     * @var TemplateRenderer
     */
    private TemplateRenderer $view;
    private string $layout;
    /**
     * @var Logger
     */
    public Logger $modelLogger;

    public function __construct()
    {
        $this->modelLogger = new Logger("MODEL", "../../Framework/storage/logs/model.log");
        $this->viewLogger = new Logger("RENDERER", '../../Framework/storage/logs/renderer.log');
        $this->view = new TemplateRenderer();
        $this->layout = "layout";
    }

    public function index()
    {
        $template = "catalog";
        try {
            $product = new Product();
            $mapper = new ProductMapper($product);
            $data = $mapper->get();
            $this->view->render($template, $this->layout, $data);
        } catch (InvalidLayoutException $layoutException) {
            $this->viewLogger->warning('Layout does not exist', ['layout'=>$this->layout]);
        } catch (InvalidTemplateException $templateException) {
            $this->viewLogger->warning('Template does not exist', ['template'=>$template]);
        } catch (Exception $exception) {
        }
    }

    public function show()
    {
        $template = "product";
        $id = $_GET["id"];
        try {
            $product = new Product();
            $mapper = new ProductMapper($product);
            $data = $mapper->get($id);
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
