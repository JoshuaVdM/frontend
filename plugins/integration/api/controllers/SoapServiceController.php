<?php
/**
 * Created by PhpStorm.
 * User: Ludo
 * Date: 31/03/2017
 * Time: 10:20
 */

namespace Integration\API\Controllers;


use Integration\API\Services\VisitorService;

class SoapServiceController
{

    public function SoapService()
    {
        $server = new \SoapServer(
            '/Integration/Api/SoapService.wsdl',
            ['classmap' => [
                'Visitor' => 'VisitorService'
            ]]
        );


        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml; charset=ISO-8859-1');

        ob_start();
        $server->handle();
        $response->setContent(ob_get_clean());

        return $response;
    }
}