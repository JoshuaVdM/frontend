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

    public function update($id, Request $request)
    {
        $event = Event::find($id);

        if (!empty($event))
        {
            if ($request->planning_id)
                $event->planning_id = $request->planning_id;
            if ($request->name)
                $event->name = $request->name;
            if ($request->desc)
                $event->desc = $request->desc;
            if ($request->start)
                $event->start = $request->start;
            if ($request->end)
                $event->end = $request->end;
            if ($request->location)
                $event->location = $request->location;

            if ($event->save())
                return $this->beautifulReturn(200, ['Suffix' => 'Updated']);

        } else {
            return $this->beautifulReturn(404);
        }
        return $this->beautifulReturn(400);
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        if (!empty($event))
        {
            if ($event->delete())
                return $this->beautifulReturn(200, ['Suffix' => 'Deleted']);

        } else {
            return $this->beautifulReturn(404);
        }
        return $this->beautifulReturn(400);
    }
}