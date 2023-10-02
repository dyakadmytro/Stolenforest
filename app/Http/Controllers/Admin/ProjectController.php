<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Image;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {

        $file = $request->file('cover_img');
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(10) . '_' . time() . '.' . $extension;
        $path = $file->storeAs('images/projects', $filename, 'public');

        DB::transaction(function () use($path, $request) {
            $image = Image::create([
                'path' => $path,
                'alter_text' => ' '
            ]);
            $project = Project::create($request->all([
                    'name', 'link', 'description'
                ]) + [
                    'cover_img_id' => $image->id
                ]);
            $project->post()->create();
        });

        return response()->redirectToRoute('admin.posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $Project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $Project)
    {
        return view('admin.project.edit', [
            'project' => $Project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $Project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $Project)
    {
        //
    }
}
