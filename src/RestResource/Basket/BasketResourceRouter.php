<?php
namespace Kartenmacherei\ExampleService\RestResource\Basket;

use Kartenmacherei\RestFramework\RestResource\RestResource;
use Kartenmacherei\RestFramework\Router\AbstractResourceRouter;
use Kartenmacherei\RestFramework\Request\Pattern;
use Kartenmacherei\RestFramework\Request\Request;

class BasketResourceRouter extends AbstractResourceRouter
{
    /**
     * @var BasketResourceFactory
     */
    private $resourceFactory;

    /**
     * @param BasketResourceFactory $resourceFactory
     */
    public function __construct(BasketResourceFactory $resourceFactory)
    {
        parent::__construct(null);
        $this->resourceFactory = $resourceFactory;
    }

    /**
     * @param Request $request
     * @return bool
     */
    protected function canRoute(Request $request): bool
    {
        return $request->getUri()->matches(new Pattern('/baskets/\w+$'));
    }

    /**
     * @param Request $request
     * @return RestResource
     */
    protected function doRoute(Request $request): RestResource
    {
        return $this->resourceFactory->createBasketResource();
    }

}
