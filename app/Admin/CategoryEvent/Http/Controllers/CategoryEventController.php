<?php
namespace App\Admin\CategoryEvent\Http\Controllers;

use App\Admin\CategoryEvent\Http\Requests\CategoryEventRequest;
use App\Admin\CategoryEvent\Models\CategoryEvent;
use App\Core\Http\Controllers\CoreController as CoreController;
use Redirect;

class CategoryEventController extends CoreController
{
    function index()
    {
        $categories_event = CategoryEvent::all();
        return view('admin::categoryevent.index')->with(compact('categories_event'));
    }

    function edit($id)
    {
        $category_event = CategoryEvent::find($id);
        return view('admin::categoryevent.form')->with(compact('category_event'));
    }

    function create()
    {
        return view('admin::categoryevent.form');
    }

    public function store(CategoryEventRequest $request)
    {
        $category_event = new CategoryEvent();
        $category_event->fill($request->all());
        $category_event->slug = str_slug($request->name);

        if ($category_event->save()) {
            return Redirect::route('admin.categoryevent.index');
        } else {
            return Redirect::route('admin.categoryevent.create');
        }
    }

    public function update($id, CategoryEventRequest $request)
    {
        $category_event = CategoryEvent::find($id);
        $category_event->fill($request->all());
        $category_event->slug = str_slug($request->name);

        if ($category_event->save()) {
            return Redirect::route('admin.categoryevent.index');
        } else {
            return Redirect::route('admin.categoryevent.edit', ['id' => $id])->withInputs();
        }
    }

    function destroy($id)
    {
        $category_event = CategoryEvent::find($id);

        if ($category_event->delete()) {
            return Redirect::route('admin.categoryevent.index');
        } else {
            return Redirect::route('admin.categoryevent.index')->withInputs();
        }
    }
}
