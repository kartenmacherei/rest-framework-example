<?php
namespace Kartenmacherei\ExampleService\RestResource\BasketCollection;

use Kartenmacherei\RestFramework\Action\Command;
use Kartenmacherei\RestFramework\RestResource\RestResource;
use Kartenmacherei\RestFramework\RestResource\SupportsPostRequests;

class BasketCollectionResource extends RestResource implements SupportsPostRequests
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
        $this->factory = $factory;
    }

    /**
     * @return Command
     */
    public function getPostCommand(): Command
    {
        return $this->factory->createCreateBasketCommand();
    }
}
