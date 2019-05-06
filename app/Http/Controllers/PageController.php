<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Banner;
use App\Service;
use App\Offer;
use App\Project;
use App\Marketing;
use App\Contact;
use App\Team;
use App\Quote;
use App\Message;
use App\Company;

class PageController extends Controller
{
    public function index(){
        $banner = Banner::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();
        $services = Service::where('status', 'PUBLISHED')->get();
        $offer = Offer::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();
        $projects = Project::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->take(3)->get();
        $projectCategories = Project::select('category')->distinct()->get();
        $posts = Post::where('featured', 1)->where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->take(3)->get();
        $marketing = Marketing::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();
        $contacts = Contact::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();
        $team = Team::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->take(4)->get();
        $testmonials = Message::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->take(5)->get();
        $quote = Quote::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();
        $company = Company::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();

        return view('pages.index')->with([
            'title' => 'Home',
            'banner' => $banner,
            'services' => $services,
            'offer' => $offer,
            'projects' => $projects,
            'projectCategories' => $projectCategories,
            'marketing' => $marketing,
            'contacts' => $contacts,
            'team' => $team,
            'testmonials' => $testmonials,
            'quote' => $quote,
            'posts' => $posts,
            'company' => $company,
        ]);
    }
}
