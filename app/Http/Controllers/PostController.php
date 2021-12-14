<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        $data = Post::latest()->get();

        return response()->json($data);
    }

    public function show(Post $post){
        return response()->json($post);
    }

    public function create(Request $request){

        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        if($validate->fails()){
            return response()->json($validate->errors());
        }

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $datas = Post::create($data);
        $datas['message'] = 'Post berhasil ditambahkan';

        return response()->json($datas);
    }

    public function update(Request $request, Post $post){
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        if($validate->fails()){
            return response()->json($validate->errors());
        }

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $post->update($data);
        $message['message'] = 'Post berhasil diubah';

        return response()->json($message);
    }
    
    public function delete(Post $post){
        $post->delete();
        $message['message'] = 'Post berhasil dihapus';
    
        return response()->json($message);

    }
}

