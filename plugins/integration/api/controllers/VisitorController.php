<?php
/**
 * Visitor Controller Back-end Controller
 */

namespace Integration\API\Controllers;

use Illuminate\Routing\Controller;
use Integration\API\Components\UserAccount;
use League\Flysystem\Exception;
use Illuminate\Http\Request;
use RainLab\User\Models\User;

use Integration\Frontend\Models\Visitor;
use Integration\API\Traits\ReturnTrait;

class VisitorController extends Controller
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

    private function createUser($user)
    {
        if ($user['crm_id']
            && $user['name']
            && $user['surname']
            && $user['email']
            && $user['cable']
            && $user['breakfast']
            && $user['collaborator']
        ) {
            $visitor = new Visitor();
            $visitor->crm_id = $user['crm_id'];
            $visitor->name = $user['name'];
            $visitor->surname = $user['surname'];
            $visitor->email = $user['email'];
            $visitor->cable = $user['cable'];
            $visitor->breakfast = $user['breakfast'];
            $visitor->collaborator = $user['collaborator'];


            if(!isset($user['user_id']))
            {
                $user_id = UserAccount::createUserAccount($user);

                if ($user_id)
                    $user['user_id'] = $user_id;
                else
                    return $this->beautifulReturn(406);
            }
            $visitor->user_id= $user['user_id'];


            if ($visitor->save())
                return $this->beautifulReturn(200, ['Suffix' => 'Created', 'VisitorId' => $visitor->id]);

            return $this->beautifulReturn(406);
        }
        return $this->beautifulReturn(400);
    }
}

