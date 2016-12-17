<?php
namespace App\Admin\Event\Http\Controllers;

use App\Admin\CategoryEvent\Models\CategoryEvent;
use App\Admin\CategoryEvent\Models\City;
use App\Admin\Event\Http\Requests\EventRequest;
use App\Admin\Event\Models\Event;
use App\Core\Http\Controllers\CoreController as CoreController;
use Redirect;

class EventController extends CoreController
{
    function index()
    {
        $events = Event::all();
        return view('admin::event.index')->with(compact('events'));
    }

    function edit($id)
    {
        $cities = City::lists('name', 'id')->prepend('Selecione...', '');
        $categories = CategoryEvent::lists('name', 'id')->prepend('Selecione...', '');
        $event = Event::find($id);
        return view('admin::event.form')->with(compact('event', 'categories', 'cities'));
    }

    function create()
    {
        $cities = City::lists('name', 'id')->prepend('Selecione...', '');
        $categories = CategoryEvent::lists('name', 'id')->prepend('Selecione...', '');
        return view('admin::event.form')->with(compact('cities', 'categories'));
    }

    public function store(EventRequest $request)
    {
        $event = new Event();
        $event->fill($request->all());

        if ($event->save()) {
            return Redirect::route('admin.event.index');
        } else {
            return Redirect::route('admin.event.create');
        }
    }

    public function update($id, EventRequest $request)
    {
        $event = Event::find($id);
        $event->fill($request->all());

        if ($event->save()) {
            return Redirect::route('admin.event.index');
        } else {
            return Redirect::route('admin.event.edit', ['id' => $id])->withInputs();
        }
    }

    function destroy($id)
    {
        $event = Event::find($id);

        if ($event->delete()) {
            return Redirect::route('admin.event.index');
        } else {
            return Redirect::route('admin.event.index')->withInputs();
        }
    }
}
