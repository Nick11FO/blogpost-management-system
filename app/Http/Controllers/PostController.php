<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function aboutPage()
    {
        return view('about', [
            "title" => "About",
            "active" => "about",
            "name" => "Nicholas Oongwidjaja",
            "email" => "nicholas.oongwidjaja@binus.ac.id",
            "pic" => "me.jpg"
        ]);
    }

    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('user')) {
            $user = User::firstWhere('name', request('user'));
            $title = ' by ' . $user->name;
        }


        return view('blog', [
            "title" => "All Posts" . $title,
            "active" => "blog",
            "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Blog",
            "active" => "blog",
            "post" => $post
        ]);
    }

    public function showAllCategory()
    {
        return view('categories', [
            "title" => "All Categories",
            "active" => "categories",
            "categories" => Category::all()
        ]);
    }

    // public function sort(Category $category)
    // {
    //     return view('blog', [
    //         "title" => "Post By Category: $category->name",
    //         "active" => "categories",
    //         "posts" => $category->posts->load('user', 'category')
    //     ]);
    // }

    // public function allPostByUser(User $user)
    // {
    //     return view('blog', [
    //         "title" => "Post By Author : $user->name",
    //         "active" => "users",
    //         "users" => $user,
    //         "posts" => $user->posts->load('category', 'user')
    //     ]);
    // }
}
