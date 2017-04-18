<?php
/**
 * Created by PhpStorm.
 * User: Ludovic
 * Date: 18-04-17
 * Time: 20:45
 */

namespace Integration\API\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Integration\API\Traits\ReturnTrait;

class TeamController extends Controller
{
    use ReturnTrait;

    protected $className = 'Team';

    public function store(Request $request)
    {
        if ($request->teams)
        {
            $res = [];
            foreach ($request->teams as $team)
            {
                $teamRes = json_decode($this->createTeam($team)->getContent(), true);
                array_push($res, $teamRes['TeamId']);
            }
            return $this->beautifulReturnMessage(200, 'Team Successfully Created', $res);
        }
        else {

            $team = json_decode($request->getContent(), true);

            return $this->createTeam($team);
        }
    }

    private function createTeam($team)
    {
        // @todo: Ask arthur how groeps are made, if groeps are kept by planning..

//        if ($team['planning_id']
//            && $shift['name']
//            && $shift['colaborator_id']
//            && $shift['start']
//            && $shift['end']
//            && $shift['place']
//            && $shift['desc']
//        ) {
//            $newShift = new Shift();
//            $newShift->planning_id = $shift['planning_id'];
//            $newShift->name = $shift['name'];
//            $newShift->colaborator_id = $shift['colaborator_id'];
//            $newShift->start = $shift['start'];
//            $newShift->end = $shift['end'];
//            $newShift->place = $shift['place'];
//            $newShift->desc = $shift['desc'];
//
//
//            if ($newShift->save())
//                return $this->beautifulReturn(200, ['Suffix' => 'Created', 'TeamId' => $newShift->id]);
//
//            return $this->beautifulReturn(406);
//        }
//        return $this->beautifulReturn(400);
    }
}