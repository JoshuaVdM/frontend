<?php
/**
 * Created by PhpStorm.
 * User: Ludovic
 * Date: 18-04-17
 * Time: 20:20
 */

namespace Integration\API\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Integration\API\Traits\ReturnTrait;
use Integration\Frontend\Models\Sponsor;

class SponsorController extends Controller
{
    use ReturnTrait;

    protected $className = 'Sponsor';

    public function store(Request $request)
    {
        if ($request->sponsors)
        {
            $res = [];
            foreach ($request->sponsors as $sponsor)
            {
                $sponsorRes = json_decode($this->createSponsor($sponsor)->getContent(), true);
                array_push($res, $sponsorRes['SponsorId']);
            }
            return $this->beautifulReturnMessage(200, 'Sponsors Successfully Created', $res);
        }
        else {

            $sponsor = json_decode($request->getContent(), true);

            return $this->createSponsor($sponsor);
        }
    }

    private function createSponsor($sponsor)
    {
        if ($sponsor['crm_id']
            && $sponsor['name']
            && $sponsor['website']
            && $sponsor['tel']
        ) {
            $newSponsor = new Sponsor();
            $newSponsor->crm_id = $sponsor['crm_id'];
            $newSponsor->name = $sponsor['name'];
            $newSponsor->website = $sponsor['website'];
            $newSponsor->tel = $sponsor['tel'];


            if ($newSponsor->save())
                return $this->beautifulReturn(200, ['Suffix' => 'Created', 'SponsorId' => $newSponsor->id]);

            return $this->beautifulReturn(406);
        }
        return $this->beautifulReturn(400);
    }

    public function update($id, Request $request)
    {
        $sponsor = Sponsor::find($id);

        if (!empty($sponsor))
        {
            if ($request->crm_id)
                $sponsor->crm_id = $request->crm_id;
            if ($request->name)
                $sponsor->name = $request->name;
            if ($request->website)
                $sponsor->website = $request->website;
            if ($request->tel)
                $sponsor->tel = $request->tel;

            if ($sponsor->save())
                return $this->beautifulReturn(200, ['Suffix' => 'Updated']);

        } else {
            return $this->beautifulReturn(404);
        }
        return $this->beautifulReturn(400);
    }

    public function destroy($id)
    {
        $sponsor = Sponsor::find($id);
        if (!empty($sponsor))
        {
            if ($sponsor->delete())
                return $this->beautifulReturn(200, ['Suffix' => 'Deleted']);

        } else {
            return $this->beautifulReturn(404);
        }
        return $this->beautifulReturn(400);
    }
}