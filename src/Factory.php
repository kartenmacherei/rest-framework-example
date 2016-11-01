<?php
namespace Kartenmacherei\ExampleService;

use Kartenmacherei\ExampleService\RestResource\Basket\BasketResourceFactory;
use Kartenmacherei\ExampleService\RestResource\Basket\BasketResourceRouter;
use Kartenmacherei\ExampleService\RestResource\BasketCollection\BasketCollectionResourceFactory;
use Kartenmacherei\ExampleService\RestResource\BasketCollection\BasketCollectionResourceRouter;
use Kartenmacherei\RestFramework\Request\Request;

class Factory
{
    /**
     * @var Request
     */
    private $request;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return BasketResourceRouter
     */
    public function createBasketResourceRouter(): BasketResourceRouter
    {
        return new BasketResourceRouter(new BasketResourceFactory($this->request));
    }

    /**
     * @return BasketCollectionResourceRouter
     */
    public function createBasketCollectionResourceRouter(): BasketCollectionResourceRouter
    {
        return new BasketCollectionResourceRouter(new BasketCollectionResourceFactory($this->request));
    }
}
