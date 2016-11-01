<?php
namespace Kartenmacherei\ExampleService;

use Kartenmacherei\RestFramework\Framework;
use Kartenmacherei\RestFramework\Request\Request;
use Kartenmacherei\RestFramework\Response\Response;

class Application
{
    /**
     * @param Request $request
     * @return Response
     */
    public function run(Request $request)
    {
        $factory = new Factory($request);

        $framework = Framework::createInstance();
        $framework->registerResourceRouter($factory->createBasketResourceRouter());
        $framework->registerResourceRouter($factory->createBasketCollectionResourceRouter());
        return $framework->run($request);
    }
}
