<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use \App\Post;

class PostController extends BaseController
{   
    // 列表
    public function posts(){
        $posts = Post::orderBy('created_at','desc')->paginate(5);;
        return view('post/index',compact('posts'));
    }

    // 详情
    public function show($id = 1){
        $post = Post::find($id);
        return view('post/show',compact('post'));
    }

    // 新增 1
    public function create(){
        return view('post/create');
    }

    // 新增 2
    public function store(){
        return 'PUT 新增文章';
    }

    // 编辑 1
    public function edit(){
        return view('post/edit');
    }

    // 编辑 2
    public function update(){
        return 'PUT 编辑文章';
    }

    // 删除
    public function delete(){
        return 'delete 删除文章';
    }
}
