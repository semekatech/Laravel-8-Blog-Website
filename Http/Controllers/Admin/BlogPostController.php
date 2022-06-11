<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $blog=Blog::orderBy('id','DESC')->get();

return view('Admin/blogs.index',[
'blog'=>$blog,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories=Category::All();
     return view('admin/blogs.create',[
'categories'=>$categories,]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $request->validate([
         'title'=> 'required', 
          'category_id'=> 'required',
           'description'=> 'required',
         ]);
    $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/blogimages/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $input['slug'] = \Str::slug($request->title);
            $input['views'] = 0;
        }
    
        Blog::create($input);
         return redirect('admin/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $categories=Category::All();
        return view('admin/blogs.edit',[
    'blog' =>Blog::find($id),
    
    ])
     ->with('categories',$categories) 
    ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
$blog=Blog::findOrFail($id);
       	$blog->title  = $request->title;
        $blog->description = $request->description;
        $blog->category_id  = $request->category_id;
                 if ($image = $request->file('image')) {
            $destinationPath = 'images/blogimages/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
           $blog->image = "$profileImage";
        }
    
     	$blog->save();
        return redirect('admin/blogs');   //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $blog=Blog::findOrFail($id);
		$blog->delete();
         return redirect('admin/blogs');
    }
}
