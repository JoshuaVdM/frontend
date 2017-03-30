<?php
/**
 * Created by PhpStorm.
 * User: Ludovic
 * Date: 30-03-17
 * Time: 20:02
 */

namespace Integration\API\Controllers;

use Illuminate\Routing\Controller;

class SoapController extends Controller
{
    public function webservice()
    {
        return response('testerdetest');
    }
}