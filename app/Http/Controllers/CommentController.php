<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $data=Comment::where('post_id',$id)->get();
        $pivotTable=PostCategory::where('post_id',$id)->get();
        return view('CommentTable',['data'=>$data],['result'=>$pivotTable]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('CommentForm',['post_id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $post_id)
    {
        Comment::create($request->all());
         return redirect('post/'.$post_id.'/comments');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
//        return view('CommentTable',['data'=>Comment::where('post_id',$id)->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
