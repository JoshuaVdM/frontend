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

    protected $className = 'Speaker';

    public function store(Request $request)
    {
        if ($request->speakers)
        {
            $res = [];
            foreach ($request->speakers as $speaker)
            {
                $speakerRes = json_decode($this->createSpeaker($speaker)->getContent(), true);
                array_push($res, $speakerRes['SpeakerId']);
            }
            return $this->beautifulReturnMessage(200, 'Speakers Successfully Created', $res);
        }
        else {

            $speaker = json_decode($request->getContent(), true);

            return $this->createSpeaker($speaker);
        }
    }

    private function createSpeaker($user)
    {
        if ($user['crm_id']
            && $user['name']
            && $user['surname']
            && $user['email']
            && $user['topic']
            && $user['desc_short']
            && $user['desc']
        ) {
            $speaker = new Speaker();
            $speaker->crm_id = $user['crm_id'];
            $speaker->name = $user['name'];
            $speaker->surname = $user['surname'];
            $speaker->email = $user['email'];
            $speaker->topic = $user['topic'];
            $speaker->desc_short = $user['desc_short'];
            $speaker->desc = $user['desc'];


            if(!isset($user['user_id']))
            {
                $user_id = UserAccount::createUserAccount($user);

                if ($user_id)
                    $user['user_id'] = $user_id;
                else
                    return $this->beautifulReturn(406);
            }
            $speaker->user_id = $user['user_id'];


            if ($speaker->save())
                return $this->beautifulReturn(200, ['Suffix' => 'Created', 'SpeakerId' => $speaker->id]);

            return $this->beautifulReturn(406);
        }
        return $this->beautifulReturn(400);
    }
}
