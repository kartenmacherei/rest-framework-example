<?php
namespace Kartenmacherei\ExampleService\RestResource\Basket;

use Kartenmacherei\RestFramework\ResourceRequest\ResourceRequest;
use Kartenmacherei\RestFramework\Router\AbstractResourceRouter;
use Kartenmacherei\RestFramework\Request\Pattern;
use Kartenmacherei\RestFramework\Request\Request;

class BasketResourceRouter extends AbstractResourceRouter
{

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
     * @return ResourceRequest
     */
    protected function doRoute(Request $request): ResourceRequest
    {
        return new BasketResourceRequest($request->getMethod(), $request->getUri(), $request->getBody());
    }

}
