<?php
namespace Kartenmacherei\ExampleService\RestResource\BasketCollection;

use Kartenmacherei\RestFramework\Action\Command;
use Kartenmacherei\RestFramework\Response\Content\JsonContent;
use Kartenmacherei\RestFramework\Response\CreatedResponse;
use Kartenmacherei\RestFramework\Response\Response;

class CreateBasketCommand implements Command
{
    /**
     * @var CreateBasketCommandParameters $resourceRequest
     */
    private $resourceRequest;

    /**
     * @param CreateBasketCommandParameters $resourceRequest
     */
    public function __construct(CreateBasketCommandParameters $resourceRequest)
    {
        $this->resourceRequest = $resourceRequest;
    }

    /**
     * @return Response
     */
    public function execute(): Response
    {
        $item = $this->resourceRequest->getBasketItem();
        return new CreatedResponse(new JsonContent($item->getSku()));
    }
}
