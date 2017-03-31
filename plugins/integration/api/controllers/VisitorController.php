<?php namespace Integration\API\Controllers;


use Illuminate\Routing\Controller;
use Integration\API\Helpers\BeautifulReturn\BeautifulReturn;
use October\Rain\Auth\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use Integration\Frontend\Models\Visitor;
use Integration\API\Traits\ReturnTrait;


/**
 * Visitor Controller Back-end Controller
 */
class VisitorController extends Controller
{
    use ReturnTrait;

    protected $className = 'Visitor';

    public function store(Request $request)
    {

        if ($request->cms_id
            && $request->name
            && $request->surname
            && $request->email
            && $request->cable
            && $request->breakfast
            && $request->collaborator
        ) {
            // protected $fillable = ['activity_id', 'requestor_id', 'start_date', 'end_date', 'description', 'approver_id', 'approved'];
            $visitor = new Visitor();
            $visitor->cms_id = $request->cms_id;
            $visitor->name = $request->name;
            $visitor->surname = $request->surname;
            $visitor->email = $request->email;
            $visitor->cable = $request->cable;
            $visitor->breakfast = $request->breakfast;
            $visitor->collaborator = $request->collaborator;

            if(!$request->user_id)
            {
                $user = new User();
                $user->email = $request->email;
                $user->password = $request->email;


                if ($user->save())
                    $request->request->add(['user_id' => $user->id]);
                else
                    return $this->beautifulReturn(406);
            }
            $visitor->user_id = $request->user_id;


            if ($visitor->save())
                return $this->beautifulReturn(200, ['Suffix' => 'Created', 'VisitorId' => $visitor->id]);

            return $this->beautifulReturn(406);
        }
        return $this->beautifulReturn(400);
    }
}

