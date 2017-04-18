<?php
/**
 * Created by PhpStorm.
 * User: Ludovic
 * Date: 18-04-17
 * Time: 20:41
 */

namespace Integration\API\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Integration\API\Traits\ReturnTrait;
use Integration\Frontend\Models\Shift;

class ShiftController extends Controller
{
    use ReturnTrait;

    protected $className = 'Shift';

    public function store(Request $request)
    {
        if ($request->shifts)
        {
            $res = [];
            foreach ($request->shifts as $shift)
            {
                $shiftRes = json_decode($this->createShift($shift)->getContent(), true);
                array_push($res, $shiftRes['ShiftId']);
            }
            return $this->beautifulReturnMessage(200, 'Shift Successfully Created', $res);
        }
        else {

            $shift = json_decode($request->getContent(), true);

            return $this->createShift($shift);
        }
    }

    private function createShift($shift)
    {
        if ($shift['planning_id']
            && $shift['name']
            && $shift['colaborator_id']
            && $shift['start']
            && $shift['end']
            && $shift['place']
            && $shift['desc']
        ) {
            $newShift = new Shift();
            $newShift->planning_id = $shift['planning_id'];
            $newShift->name = $shift['name'];
            $newShift->colaborator_id = $shift['colaborator_id'];
            $newShift->start = $shift['start'];
            $newShift->end = $shift['end'];
            $newShift->place = $shift['place'];
            $newShift->desc = $shift['desc'];


            if ($newShift->save())
                return $this->beautifulReturn(200, ['Suffix' => 'Created', 'ShiftId' => $newShift->id]);

            return $this->beautifulReturn(406);
        }
        return $this->beautifulReturn(400);
    }

    public function update($id, Request $request)
    {
        $shift = Shift::find($id);

        if (!empty($shift))
        {
            if ($request->planning_id)
                $shift->planning_id = $request->planning_id;
            if ($request->name)
                $shift->name = $request->name;
            if ($request->colaborator_id)
                $shift->colaborator_id = $request->colaborator_id;
            if ($request->start)
                $shift->start = $request->start;
            if ($request->end)
                $shift->end = $request->end;
            if ($request->place)
                $shift->place = $request->place;
            if ($request->desc)
                $shift->desc = $request->desc;

            if ($shift->save())
                return $this->beautifulReturn(200, ['Suffix' => 'Updated']);

        } else {
            return $this->beautifulReturn(404);
        }
        return $this->beautifulReturn(400);
    }

    public function destroy($id)
    {
        $shift = Shift::find($id);
        if (!empty($shift))
        {
            if ($shift->delete())
                return $this->beautifulReturn(200, ['Suffix' => 'Deleted']);

        } else {
            return $this->beautifulReturn(404);
        }
        return $this->beautifulReturn(400);
    }
}