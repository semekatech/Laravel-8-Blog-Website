<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BreakingNew;
use App\Models\Category;
use App\Models\Comment;

use DB;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
     $id=1;
     $id2=2;
      $id3=3;
      $id5=5;
      $blogs = Blog::orderBy('id','DESC')->simplePaginate(6);
     $top1=Blog::orderBy('id','DESC')->first();
       $top2=Blog::orderBy('id','DESC')->skip($id)->take($id)->first();
       $top3=Blog::orderBy('id','DESC')->skip($id2)->take($id2)->first();
       $breakingnews=BreakingNew::orderBy('id','DESC')->limit(20)->get();
       $trending=BreakingNew::orderBy('views','DESC')->limit(10)->get();
       $breaking=BreakingNew::orderBy('id','DESC')->get();
        return view('index')
        ->with('blogs',$blogs) 
         ->with('top1',$top1)
         ->with('top2',$top2)
          ->with('top3',$top3)
           ->with('breakingnews',$breakingnews)
            ->with('breaking',$breaking)
            ->with('trending',$trending);
              
    }
    public function categoryindex($category)
    {
     $cat=Category::where('category',$category)->join('blogs','blogs.category_id', '=', 'categories.id')->get();
       $top=Category::where('category',$category)->join('blogs','blogs.category_id', '=', 'categories.id')->first();
       if($top){
         return view('category-news')
           ->with('cat',$cat)
         ->with('top',$top);
        
       }
        else{
            return 'no blogs found';
        }
       
              
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
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
         'name'=> 'required|alpha', 
          'email'=> 'required|email', 
           'message'=> 'required',
         ]);
    $input = $request->all();

    
        Comment::create($input);
         return redirect('/post-details');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
         $topblogs=Blog::orderBy('id','DESC')->limit(5)->get();
        
        $blog=Blog::where('slug',$slug)->join('categories','categories.id', '=', 'blogs.category_id')->first();
         $comments=Comment::where('slug',$slug)->get();
        \DB::table('blogs')
        ->where('slug',$slug)
        ->increment('views',1);
        return view('post-details') 
        ->with('blog',$blog)
         ->with('topblogs',$topblogs) 
         ->with('comments',$comments)  ;
    }

    public function showBreaking($slug)
    {
        
         $topbreaking=BreakingNew::orderBy('id','DESC')->limit(5)->get();
         \DB::table('breaking_news')
        ->where('slug',$slug)
        ->increment('views',1);
         $comments=Comment::where('slug',$slug)->get();
        $breaking=BreakingNew::where('slug',$slug)->join('categories','categories.id', '=', 'breaking_news.category_id')->first();
        return view('breaking-details') 
        ->with('breaking',$breaking)
         ->with('topbreaking',$topbreaking) 
          ->with('comments',$comments)  ; 
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
