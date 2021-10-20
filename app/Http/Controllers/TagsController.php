<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function indexuser(){
        $tag = -1;
        $tags = Tag::all();
        return view('user.tags')->with(['tag' => $tag, 'tags' => $tags]);
    }
    public function tagshowuser($id){
        $tag = $id;
        $tags = Tag::all();
        return view('user.tags')->with(['tag' => $tag, 'tags' => $tags]);
    }
    public function indexadmin(){
        $tag = -1;
        $tags = Tag::all();
        return view('admin.tags')->with(['tag' => $tag, 'tags' => $tags]);
    }
    public function tagshowadmin($id){
        $tag = $id;
        $tags = Tag::all();
        return view('admin.tags')->with(['tag' => $tag, 'tags' => $tags]);
    }
}
