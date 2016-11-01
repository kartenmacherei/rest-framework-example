<?php
namespace Kartenmacherei\ExampleService\RestResource\Basket;

use Kartenmacherei\RestFramework\Action\Query;
use Kartenmacherei\RestFramework\RestResource\RestResource;
use Kartenmacherei\RestFramework\RestResource\SupportsGetRequests;

class BasketResource extends RestResource implements SupportsGetRequests
{
    /**
     * @var BasketResourceFactory
     */
    private $factory;

    /**
     * @param BasketResourceFactory $factory
     */
    public function __construct(BasketResourceFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @return Query
     */
    public function getQuery(): Query
    {
        return $this->factory->createBasketQuery();
    }
}

