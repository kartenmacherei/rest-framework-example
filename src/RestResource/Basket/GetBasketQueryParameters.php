<?php
namespace Kartenmacherei\ExampleService\RestResource\Basket;

use Kartenmacherei\ExampleService\Domain\BasketIdentifier;
use Kartenmacherei\RestFramework\Request\Uri;
use Kartenmacherei\RestFramework\Request\UriException;
use Kartenmacherei\RestFramework\ResourceRequest\BadRequestException;

class GetBasketQueryParameters
{
    /**
     * @var Uri
     */
    private $uri;

    /**
     * @param Uri $uri
     */
    public function __construct(Uri $uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return BasketIdentifier
     * @throws BadRequestException
     */
    public function getBasketIdentifier()
    {
        try {
            return new BasketIdentifier($this->uri->getPathSegment(1));
        } catch (UriException $e) {
            throw new BadRequestException();
        }
    }

}
