<?php
namespace Kartenmacherei\ExampleService\RestResource\Basket;

use Kartenmacherei\RestFramework\Request\Request;

class BasketResourceFactory
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
     * @return BasketResource
     */
    public function createBasketResource(): BasketResource
    {
        return new BasketResource($this);
    }

    /**
     * @return GetBasketQuery
     */
    public function createBasketQuery(): GetBasketQuery
    {
        return new GetBasketQuery(
            new GetBasketQueryParameters(
                $this->request->getUri()
            )
        );
    }

}
