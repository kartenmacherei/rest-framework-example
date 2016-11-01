<?php
namespace Kartenmacherei\ExampleService\RestResource\BasketCollection;

use Kartenmacherei\RestFramework\Request\Body\JsonBody;
use Kartenmacherei\RestFramework\Request\Request;
use Kartenmacherei\RestFramework\ResourceRequest\BadRequestException;

class BasketCollectionResourceFactory
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
     * @return BasketCollectionResource
     */
    public function createBasketCollectionResource(): BasketCollectionResource
    {
        return new BasketCollectionResource($this);
    }

    /**
     * @return CreateBasketCommand
     * @throws BadRequestException
     */
    public function createCreateBasketCommand(): CreateBasketCommand
    {
        if (!$this->request->getBody()->isJson()) {
            throw new BadRequestException();
        }
        /** @var JsonBody $body */
        $body = $this->request->getBody();
        return new CreateBasketCommand(new CreateBasketCommandParameters($body));
    }

}
