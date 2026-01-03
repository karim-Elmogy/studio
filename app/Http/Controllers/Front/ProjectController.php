<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectPageSetting;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('is_active', true)
            ->orderBy('order')
            ->paginate(12);

        $pageSettings = ProjectPageSetting::getSettings();

        return view('front.projects.index', compact('projects', 'pageSettings'));
    }

    public function show($id)
    {
        $project = Project::where('is_active', true)->findOrFail($id);

        // Get related projects
        $relatedProjects = Project::where('is_active', true)
            ->where('id', '!=', $id)
            ->orderBy('order')
            ->limit(3)
            ->get();

        return view('front.project.show', compact('project', 'relatedProjects'));
    }
}
