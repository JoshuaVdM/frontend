<?php
/**
 * Speaker Controller Back-end Controller
 */

namespace Integration\API\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Integration\API\Traits\ReturnTrait;
use Integration\API\Components\UserAccount;
use Integration\Frontend\Models\Speaker;

class SpeakerController extends Controller
{

    use ReturnTrait;

    protected $className = 'Visitor';

    public function store(Request $request)
    {
        if ($request->visitors)
        {
            $res = [];
            foreach ($request->visitors as $visitor)
            {
                $visitorRes = json_decode($this->createUser($visitor)->getContent(), true);
                array_push($res, $visitorRes['VisitorId']);
            }
            return $this->beautifulReturnMessage(200, 'Visitors Successfully Created', $res);
        }
        else {

            $visitor = json_decode($request->getContent(), true);

            return $this->createUser($visitor);
        }
    }
}
