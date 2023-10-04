<?php

namespace App\Http\Controllers\Admin;

use App\Facades\ImgStore;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWidgetRequest;
use App\Http\Requests\UpdateWidgetRequest;
use App\Models\Image;
use App\Models\Post;
use App\Models\Widget;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class WidgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.widget.list', ['widgets' => Widget::with('posts')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.widget.create', [
            'posts' => Post::with('postable')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWidgetRequest $request)
    {
        $widget = Widget::create($request->all([
                'name', 'options'
            ]));
        $widget->posts()->sync($request->get('posts', []));

        return response()->redirectToRoute('widgets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Widget $Widget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Widget $widget)
    {
        return view('admin.widget.edit', [
            'widget' => $widget->load('posts.postable'),
            'posts' => Post::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWidgetRequest $request, Widget $Widget)
    {
        $Widget->update($request->all([
                'name', 'options'
            ]));
        $Widget->posts->sync($request->get('posts', []));

        return response()->redirectToRoute('widgets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Widget $Widget)
    {
        $Widget->delete();
        return response()->redirectToRoute('widgets.index');
    }
}
