<?php namespace Integration\API\Controllers;


use Illuminate\Routing\Controller;
use Integration\API\Components\UserAccount;
use League\Flysystem\Exception;
use Illuminate\Http\Request;
use RainLab\User\Models\User;

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

//        $data = post();
//
//        $rndm_pas = bin2hex(openssl_random_pseudo_bytes(4));
//
//        $request->request->add(['username' => $request->name . '.' . $request->surname]);
//        $request->request->add(['password' => $rndm_pas]);
//        $request->request->add(['password_confirmation' => $rndm_pas]);
//
//        $account = new UserAccount();
//        $account->request_ = $request;

//        return $account->onRegister();

        if ($request['crm_id']
            && $request->name
            && $request->surname
            && $request->email
            && $request->cable
            && $request->breakfast
            && $request->collaborator
        ) {
            // protected $fillable = ['activity_id', 'requestor_id', 'start_date', 'end_date', 'description', 'approver_id', 'approved'];
            $visitor = new Visitor();
            $visitor->crm_id = $request->crm_id;
            $visitor->name = $request->name;
            $visitor->surname = $request->surname;
            $visitor->email = $request->email;
            $visitor->cable = $request->cable;
            $visitor->breakfast = $request->breakfast;
            $visitor->collaborator = $request->collaborator;


            if(!$request->user_id)
            {
                try {
                    $rndm_pas = bin2hex(openssl_random_pseudo_bytes(4));

                    $request->request->add(['username' => $request->name . '.' . $request->surname]);
                    $request->request->add(['password' => $rndm_pas]);
                    $request->request->add(['password_confirmation' => $rndm_pas]);

                    $account = new UserAccount();
                    $account->request_ = $request;
                    $request->request->add(['user_id' => $account->onRegister()]);
                }
                catch (Exception $e){
                    return $this->beautifulReturn(406);
                }
            }
            $visitor->user_id = $request->user_id;


            if ($visitor->save())
                return $this->beautifulReturn(200, ['Suffix' => 'Created', 'VisitorId' => $visitor->id]);

            return $this->beautifulReturn(406);
        }
        return $this->beautifulReturn(400);
    }
}

