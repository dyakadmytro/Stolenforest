<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function posts()
    {
        $projects = Project::with('post')->get();
        $articles = Article::all();
        return view('admin.posts', [
            'projects' => $projects,
            'articles' => $articles,
        ]);
    }
}
