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
}