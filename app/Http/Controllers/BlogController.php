<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Contact;
use App\Company;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->get();
        $contacts = Contact::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();
        $company = Company::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();

        return view('pages.blogs')->with([
            'title' => 'Blogs',
            'posts' => $posts,
            'contacts' => $contacts,
            'company' => $company,
        ]);
    }

    public function blog($blogId){
        $post = Post::find($blogId);
        $recentPosts = Post::where('id', '!=', $blogId)->where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->take(5)->get();
        $contacts = Contact::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();
        $company = Company::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();

        return view('pages.blog')->with([
            'title' => 'Blog',
            'post' => $post,
            'recentPosts' => $recentPosts,
            'contacts' => $contacts,
            'company' => $company,
        ]);
    }
}
