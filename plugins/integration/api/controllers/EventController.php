<?php
/**
 * Created by PhpStorm.
 * User: Ludovic
 * Date: 18-04-17
 * Time: 20:29
 */

namespace Integration\API\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Integration\API\Traits\ReturnTrait;
use Integration\Frontend\Models\Event;

class EventController extends Controller
{
    use ReturnTrait;

    protected $className = 'Event';

    public function store(Request $request)
    {
        if ($request->events)
        {
            $res = [];
            foreach ($request->events as $event)
            {
                $eventRes = json_decode($this->createEvent($event)->getContent(), true);
                array_push($res, $eventRes['EventId']);
            }
            return $this->beautifulReturnMessage(200, 'Events Successfully Created', $res);
        }
        else {

            $event = json_decode($request->getContent(), true);

            return $this->createEvent($event);
        }
    }

    private function createEvent($event)
    {
        if ($event['planning_id']
            && $event['name']
            && $event['desc']
            && $event['start']
            && $event['end']
            && $event['location']
        ) {
            $newEvent = new Event();
            $newEvent->planning_id = $event['planning_id'];
            $newEvent->name = $event['name'];
            $newEvent->desc = $event['desc'];
            $newEvent->start = $event['start'];
            $newEvent->end = $event['end'];
            $newEvent->location = $event['location'];


            if ($newEvent->save())
                return $this->beautifulReturn(200, ['Suffix' => 'Created', 'EventId' => $newEvent->id]);

            return $this->beautifulReturn(406);
        }
        return $this->beautifulReturn(400);
    }
}