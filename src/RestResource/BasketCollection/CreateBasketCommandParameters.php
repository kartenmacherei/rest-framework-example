<?php
namespace Kartenmacherei\ExampleService\RestResource\BasketCollection;

use Kartenmacherei\ExampleService\Domain\BasketItem;
use Kartenmacherei\RestFramework\Request\Body\JsonBody;

class CreateBasketCommandParameters
{
    /**
     * @var JsonBody
     */
    private $requestBody;

    /**
     * @param JsonBody $requestBody
     */
    public function __construct(JsonBody $requestBody)
    {
        $this->requestBody = $requestBody;
    }

    /**
     * @return BasketItem
     */
    public function getBasketItem(): BasketItem {
        $json = $this->requestBody->getJson();

        return new BasketItem(
            $json->query('sku'),
            $json->query('quantity'),
            $json->query('price')
        );
    }

}
