<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Auth\Access\Response;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(){

        return view('posts.index',[
            'posts'=>Post::latest()->filter(
                request(['search','category','author'])
            )->paginate(18)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show',[
            'post'=>$post
        ]);

      
    }  
    public function create(){
    
        return view('admin.posts.create');

        }

        public function download($id)
        {
            $post = Post::findOrFail($id);
            $filePath = $post->image_url;  
    
            // 确保文件存在
            if (!Storage::exists($filePath)) {
                abort(404, 'File not found.');
            }
    
            // 返回文件下载响应
            return Storage::download($filePath);
        }

    //     public function store(Request $request){
        
    //         $attributes=request()->validate([
    //             'title'=>'required',
    //             'slug'=>['required',Rule::unique('posts','slug')],
    //             'excerpt'=>'required',
    //             'body'=>'required',
    //             'category_id'=>['required',Rule::exists('categories','id')]
    //         ]);

    //         $attributes['user_id']=auth()->id();



    //         Post::create($attributes);

            
    //         if ($request->hasFile('upload') && $request->file('upload')->isValid()) {
    //             $upload = new Upload();
        
    //             // 获取 MIME 类型
    //             $upload->mimeType = $request->file('upload')->getMimeType();
    //             $upload->originalName = $request->file('upload')->getClientOriginalName();
    //             $upload->path = $request->file('upload')->store('uploads');
    //             $upload->save();
        
    //             // 如果文件上传成功，返回相关信息视图
    //             return view('uploads.create', [
    //                 'id' => $upload->id,
    //                 'path' => $upload->path,
    //                 'originalName' => $upload->originalName,
    //                 'mimeType' => $upload->mimeType
    //             ]);
    //         }

    // return redirect('/');

         
        // }

}

?>