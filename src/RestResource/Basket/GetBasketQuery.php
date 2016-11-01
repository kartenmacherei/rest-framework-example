<?php
namespace Kartenmacherei\ExampleService\RestResource\Basket;

use Kartenmacherei\RestFramework\Action\Query;
use Kartenmacherei\RestFramework\Response\ContentResponse;
use Kartenmacherei\RestFramework\Response\Content\JsonContent;
use Kartenmacherei\RestFramework\Response\Response;

class GetBasketQuery implements Query
{
    /**
     * @var GetBasketQueryParameters
     */
    private $parameters;

    /**
     * @param GetBasketQueryParameters $parameters
     */
    public function __construct(GetBasketQueryParameters $parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @return Response
     */
    public function execute(): Response
    {
        return new ContentResponse(
            new JsonContent(
                [
                    'id' => $this->parameters->getBasketIdentifier()->asString(),
                    'items' => []
                ]
            )
        );
    }
}
