<?php
/**
 * Visitor Controller Back-end Controller
 */

namespace Integration\API\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
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

    public function update($id, Request $request)
    {
        $visitor = Visitor::find($id);

        if (!empty($visitor))
        {
            if ($request->crm_id)
                $visitor->crm_id = $request->crm_id;
            if ($request->name)
                $visitor->name = $request->name;
            if ($request->surname)
                $visitor->surname = $request->surname;
            if ($request->email)
                $visitor->email = $request->email;
            if ($request->cable)
                $visitor->cable = $request->cable;
            if ($request->breakfast)
                $visitor->breakfast = $request->breakfast;
            if ($request->collaborator)
                $visitor->collaborator = $request->collaborator;

            if ($visitor->save())
                return $this->beautifulReturn(200, ['Suffix' => 'Updated']);

        } else {
            return $this->beautifulReturn(404);
        }
        return $this->beautifulReturn(400);
    }

    public function destroy($id)
    {
        $visitor = Visitor::find($id);
        if (!empty($visitor))
        {
            UserAccount::deleteUserAccount($visitor->user_id);

            if ($visitor->delete())
                return $this->beautifulReturn(200, ['Suffix' => 'Deleted']);

        } else {
            return $this->beautifulReturn(404);
        }
        return $this->beautifulReturn(400);
    }
}

