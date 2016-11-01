<?php
namespace Kartenmacherei\ExampleService\RestResource\BasketCollection;

use Kartenmacherei\RestFramework\Request\Request;
use Kartenmacherei\RestFramework\Request\Uri;
use Kartenmacherei\RestFramework\RestResource\RestResource;
use Kartenmacherei\RestFramework\Router\AbstractResourceRouter;

class BasketCollectionResourceRouter extends AbstractResourceRouter
{
    /**
     * @var BasketCollectionResourceFactory
     */
    private $factory;

    /**
     * @param BasketCollectionResourceFactory $factory
     */
    public function __construct(BasketCollectionResourceFactory $factory)
    {
        parent::__construct(null);
        $this->factory = $factory;
    }


    protected function canRoute(Request $request): bool
    {
        return $request->getUri()->equals(new Uri('/baskets'));
    }

    /**
     * @param Request $request
     * @return RestResource
     */
    protected function doRoute(Request $request): RestResource
    {
        return $this->factory->createBasketCollectionResource();
    }

}
