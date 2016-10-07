<?php
namespace Kartenmacherei\ExampleService\Domain;

class BasketIdentifier
{
    private $value = '';

    /**
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function asString()
    {
        return $this->value;
    }

}
