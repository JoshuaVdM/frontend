<?php
/**
 * Created by PhpStorm.
 * User: Ludovic
 * Date: 18-04-17
 * Time: 20:35
 */

namespace Integration\API\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Integration\API\Traits\ReturnTrait;
use Integration\Frontend\Models\Schedule;

class ScheduleController extends Controller
{
    use ReturnTrait;

    protected $className = 'Schedule';

    public function store(Request $request)
    {
        if ($request->schedules)
        {
            $res = [];
            foreach ($request->schedules as $schedule)
            {
                $scheduleRes = json_decode($this->createSchedule($schedule)->getContent(), true);
                array_push($res, $scheduleRes['ScheduleId']);
            }
            return $this->beautifulReturnMessage(200, 'Schedules Successfully Created', $res);
        }
        else {

            $schedule = json_decode($request->getContent(), true);

            return $this->createSchedule($schedule);
        }
    }

    private function createSchedule($schedule)
    {
        if ($schedule['planning_id']
            && $schedule['shift_id']
        ) {
            $newSchedule = new Schedule();
            $newSchedule->planning_id = $schedule['planning_id'];
            $newSchedule->shift_id = $schedule['shift_id'];


            if ($newSchedule->save())
                return $this->beautifulReturn(200, ['Suffix' => 'Created', 'ScheduleId' => $newSchedule->id]);

            return $this->beautifulReturn(406);
        }
        return $this->beautifulReturn(400);
    }

    public function update($id, Request $request)
    {
        $schedule = Schedule::find($id);

        if (!empty($schedule))
        {
            if ($request->planning_id)
                $schedule->planning_id = $request->planning_id;
            if ($request->shift_id)
                $schedule->shift_id = $request->shift_id;

            if ($schedule->save())
                return $this->beautifulReturn(200, ['Suffix' => 'Updated']);

        } else {
            return $this->beautifulReturn(404);
        }
        return $this->beautifulReturn(400);
    }

    public function destroy($id)
    {
        $schedule = Schedule::find($id);
        if (!empty($schedule))
        {
            if ($schedule->delete())
                return $this->beautifulReturn(200, ['Suffix' => 'Deleted']);

        } else {
            return $this->beautifulReturn(404);
        }
        return $this->beautifulReturn(400);
    }
}