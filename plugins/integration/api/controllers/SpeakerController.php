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

            // Create account if Speaker doesn't already has one.
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
    
    public function update($id, Request $request)
    {
        $speaker = Speaker::find($id);

        if (!empty($speaker))
        {
            if ($request->crm_id)
                $speaker->crm_id = $request->crm_id;
            if ($request->name)
                $speaker->name = $request->name;
            if ($request->surname)
                $speaker->surname = $request->surname;
            if ($request->email)
                $speaker->email = $request->email;
            if ($request->topic)
                $speaker->topic = $request->topic;
            if ($request->desc_short)
                $speaker->desc_short = $request->desc_short;
            if ($request->desc)
                $speaker->desc = $request->desc;

            if ($speaker->save())
                return $this->beautifulReturn(200, ['Suffix' => 'Updated']);

        } else {
            return $this->beautifulReturn(404);
        }
        return $this->beautifulReturn(400);
    }

    public function destroy($id)
    {
        $speaker = Speaker::find($id);
        if (!empty($speaker))
        {
            UserAccount::deleteUserAccount($speaker->user_id);

            if ($speaker->delete())
                return $this->beautifulReturn(200, ['Suffix' => 'Deleted']);

        } else {
            return $this->beautifulReturn(404);
        }
        return $this->beautifulReturn(400);
    }
}
