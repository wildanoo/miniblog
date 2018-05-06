<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index')
                ->with('title',Setting::first()->site_name)
                ->with('categories', Category::take(5)->get())
                ->with('first_post', Post::orderBy('created_at','desc')->first())
                ->with('second_post', Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
                ->with('third_post', Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
                ->with('laravel', Category::find(6))
                ->with('jquery',Category::find(5))
                ->with('setting',Setting::first());
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug',$slug)->first();

        $next_post = Post::where('id', '>', $post->id)->min('id');
        $prev_post = Post::where('id', '<', $post->id)->max('id');

        return view('single')->with('post',$post)
                             ->with('title',$post->title)
                             ->with('setting',Setting::first())
                             ->with('categories',Category::take(5)->get())
                             ->with('next', Post::find($next_post))
                             ->with('prev', Post::find($prev_post))
                             ->with('tags', Tag::all());
    }

    public function category($id)
    {
        $category = Category::findOrFail($id);

        return view('category')->with('category',$category)
                               ->with('title',$category->name)
                               ->with('setting',Setting::first())
                               ->with('categories', Category::take(5)->get());
    }

    public function tag($id)
    {
        $tag = Tag::findOrFail($id);

        return view('tag')->with('tag',$tag)
                          ->with('title',$tag->tag)
                          ->with('setting',Setting::first())
                          ->with('categories',Category::take(5)->get());
    }
}
