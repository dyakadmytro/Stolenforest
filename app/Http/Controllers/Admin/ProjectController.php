<?php

namespace App\Http\Controllers\Admin;

use App\Facades\ImgStore;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Image;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

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
        return view('admin.project.create', [
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $file = $request->file('cover_img');
        $image_name = ImgStore::projects($file);
        DB::transaction(function () use($image_name, $request) {
            $image = Image::create([
                'path' => $image_name,
                'alter_text' => ' '
            ]);
            $project = Project::create($request->all([
                    'name', 'link', 'description'
                ]) + [
                    'cover_img_id' => $image->id
                ]);
            $project->post()->create();
            $project->post->tags()->sync($request->get('tags', []));
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
    public function edit(Project $project)
    {
        return view('admin.project.edit', [
            'project' => $project->load('post.tags'),
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $Project)
    {
        $image_name = null;
        if($request->hasFile('cover_img')){
            $file = $request->file('cover_img');
            $image_name = ImgStore::projects($file);
        }
        DB::transaction(function () use($image_name, $request, $Project) {
            $data = [];
            if($image_name) {
                $image = Image::create([
                    'path' => $image_name,
                    'alter_text' => ' '
                ]);
                $data['cover_img_id'] = $image->id;
            }

            $Project->update($request->all([
                    'name', 'link', 'description'
                ]) + $data);
            $Project->post->tags()->sync($request->get('tags', []));
        });

        return response()->redirectToRoute('admin.posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $Project)
    {
        $Project->post()->delete();
        $Project->delete();
        return response()->redirectToRoute('admin.posts');
    }
}
