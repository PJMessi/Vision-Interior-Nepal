<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Contact;
use App\Company;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->get();
        $projectCategories = Project::select('category')->distinct()->get();
        $contacts = Contact::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();
        $company = Company::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();

        return view('pages.projects')->with([
            'title' => 'Projects',
            'projects' => $projects,
            'projectCategories' => $projectCategories,
            'contacts' => $contacts,
            'company' => $company,
        ]);
    }

    public function project($projectId){
        $project = Project::find($projectId);
        $contacts = Contact::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();
        $company = Company::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();

        return view('pages.project')->with([
            'title' => 'Project',
            'project' => $project,
            'contacts' => $contacts,
            'company' => $company,
        ]);
    }
}
