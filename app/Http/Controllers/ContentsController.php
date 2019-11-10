<?php

namespace MyLearning\Http\Controllers;

use Illuminate\Http\Request;
use MyLearning\Contents;
use MyLearning\Ratings;
use MyLearning\Http\Controllers\Auth;
use DB;
use MyLearning\Selection;
use Symfony\Component\Console\Helper\Table;

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MyLearning\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $contents = Contents::orderBy('updated_at', 'desc')->paginate(5);


        // $contents = DB::select('SELECT * from contents');;
        

        // $contents = Contents::when($request->search, function ($query) use ($request) {
        //     $query->where('title', 'LIKE', "%{$request->search}%");
        // })->get();


        $search = $request->search;
        $contents = DB::table('contents')->where('title', 'like', '%'.$search.'%')->orderBy('created_at', 'DESC')->paginate(9);
        $ratings = Ratings::all();

        // return view('contents.index')->with('contents', $contents)->withQuery ($query);
        return view('contents.index', ['contents'=>$contents, 'search'=>$search, 'ratings'=>$ratings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $contents = Contents::orderBy('updated_at', 'desc')->paginate(5);
        
        return view('contents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate($request,[
            'title'=> 'required',
            'content_img' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:5000',
            'description' => 'nullable',
            'category' => 'required',
            'tag' => 'nullable',
            'body' => 'required',
            'file' => 'nullable|mimes:pdf,doc,docx,ppt,pptx|max:10000',
            'video' => 'nullable'
        ]);
        
        // Create Content
        if(!isset($_FILES['content_img']) || $_FILES['content_img']['error'] == UPLOAD_ERR_NO_FILE) {
            $img_name = ""; 
        } else {
            // print_r($_FILES);
            $img_content = $request->file('content_img');
            $img_name = time()."_".$img_content->getClientOriginalName();
            $upload_path = 'data_file/images';
            $img_content->move($upload_path, $img_name);
        }
        // $img_content = $request->file('content_img');
        // $img_name = time()."_".$img_content->getClientOriginalName();
        // $upload_path = 'data_file/images';
        // $img_content->move($upload_path, $img_name);

        // if(!isset($_FILES['file_name']) || $_FILES['file_name']['error'] == UPLOAD_ERR_NO_FILE) {
        //     $file_name = ""; 
        // } else {
        $file_content = $request->file('file');
        $file_name = time()."_".$file_content->getClientOriginalName();
        $upload_path_f = 'data_file/files';
        $file_content->move($upload_path_f, $file_name);
        // }

        $tag = $request->tag;
        $tag = explode(" ", $tag);
        $tags = implode(substr_replace($tag," #",0,0));

        Contents::create([
            'user_id' => auth()->user()->id,
            'title'=> $request->title,
            'content_img' => $img_name,
            'description'=> $request->description,
            'category'=> $request->category,
            'tag'=> $tags,
            'body'=> $request->body,
            'file'=> $file_name,
            'video'=> $request->video
        ]);

        return redirect('/contents')->with('success', 'Konten Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \MyLearning\Contents  $contents
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contents $contents, $id)
    {
        $content = Contents::find($id);
        $content_id = $content->id;
        $user_id = auth()->user()->id;
        $content_rating = DB::table('ratings')
                            ->where('content_id', $content_id)
                            ->avg('rating');
        $ratings = DB::table('ratings')
                    ->where('user_id', auth()->user()->id)
                    ->where('content_id', $content_id)
                    ->avg('rating');
        $selection = DB::table('user_selection')
                    ->where('user_id', auth()->user()->id)
                    ->where('content_id', $content_id)
                    ->avg('total_selection');
        $timespent = DB::table('timespents')
                        // ->select('timespent')
                        ->where('user_id',$user_id)
                        ->where('content_id', $content_id)
                        ->avg('timespent');
        $bookmarked = DB::table('bookmarks')
                        ->where('user_id',$user_id)
                        ->where('content_id', $content_id)
                        ->avg('A');
        if (count($selection) == 0) {
            # code...
            return view('contents.show', [
                'content'=>$content, 
                'ratings'=>$ratings, 
                'content_rating' =>$content_rating,
                'selection' => 0,
                'timespent' => $timespent,
                'bookmarked' => $bookmarked,
            ]);   
        } else {
            # code...
            return view('contents.show', [
                'content'=>$content, 
                'ratings'=>$ratings, 
                'content_rating' =>$content_rating,
                'selection' =>$selection,
                'timespent' => $timespent,
                'bookmarked' => $bookmarked,
            ]);   
        }
        
        // return view('contents.show', [
        //     'content'=>$content, 
        //     'ratings'=>$ratings, 
        //     'content_rating' =>$content_rating,
        //     'selection' =>$selection
        //     ]);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = Contents::find($id);
        return view('contents.edit')->with('content', $content);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MyLearning\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contents $contents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \MyLearning\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contents $contents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MyLearning\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request) 
    {
        // $search = $request->search;
        // $contents = DB::table('contents')->where('title', 'like', '%'.$search.'%')->paginate();
        $contents = Contents::when($request->search, function ($query) use ($request) {
            $query->where('title', 'LIKE', "%{$request->search}%");
        })->get()->paginate();
        return view('contents.search')->with('contents', $contents);
    }

    // public function rating (Request $request)
    // {
    //     $this-> validate($request,[
    //         'rating'=> 'required'
    //     ]);
        
    //     // Create Post 
    //     $rating = new Ratings;
    //     // $content = Contents::find($id);
    //     $rating->user_id = auth()->user()->id;
    //     // $rating->content_id = $request->input('content_id');
    //     // $rating->rating = $request->input('rating');
    //     $rating->save();

    //     return redirect('contents/'.$rating->content_id)->with('rating', $rating);
    // }
}


// $content = new Contents;
// $content->user_id = auth()->user()->id;
// $content->title = $request->input('title');
// $content->content_img = $request->file('content_img');
// $content->description = $request->input('description');
// $content->category = $request->input('category');
// $content->tag = $request->input('tag');
// $content->body = $request->input('body');
// $content->file = $request->file('file');
// $content->video = $request->input('video');
// $content->save();