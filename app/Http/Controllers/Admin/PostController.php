<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }
    public function create()
    {
        $users=User::all(); 
        return view('admin.post.create',compact('users'));
    }
    public function store(Request $request){
        $this->validate(request(), [

            'content' => 'required',
            'image' => 'required',
              
        ],
            [
                'content.required' => 'Content is required *',
                'image.required' => ' Image is required *',
                
                
            ]);

        $post=new Post();
        $post->content=$request->content;

        $post->save();
        

        if ($request->image != "") {
            $image = $request->image;
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('storage/posts'), $filename);
        }
        
        $post->image = $filename;
        $post->status=0;
        $post->save();
        return response()->json(['success'=>'Post created successfully!','id'=>$post->id]);
        
    }
    
    public function show($id){
        $show=Post::find($id);
        return view('admin.post.show',compact('show',));
    }
    public function edit($id){
        $edit=Post::find($id);
        return view('admin.post.edit',compact('edit'));
    }
    public function update(Request $request){
        $this->validate(request(), [
            'image' => 'required',
            'content' => 'required',  
        ],
            [
                'content.required' => 'Content is required *',
            ]);

        $post= Post::find($request->id);
        $post->content=$request->content;   
        $post->save();


        if ($request->image != "") {
            $image = $request->image;
            $image_old = $image;
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('storage/posts'), $filename);

            if(file_exists($image_old)){
                @unlink($image_old);
            }
            
            $post->image = $filename;
        }
        
        
        $post->save();
        return response()->json(['success'=>'Post updated successfully!','id'=>$post->id]);

        
    }
    public function delete($id){

        Post::find($id)->delete();
        return response()->json(['success'=> 'Post deleted successfully!']);
    }
    public function approve($id)
    {
        $post = Post::findOrFail($id);
        $post->status = 1; 
        $post->save();
        return response()->json(['success' => 'Post uploaded successfully!']);
    }

}
