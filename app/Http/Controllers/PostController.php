<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Post::with('comments')->get();
       return view('PostTable',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $data = Categories::all();
        return view('PostForm',['data'=>$data],['user_id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       $post= Post::create($request->except('category'));
        // dd($request->all());

        $post->categories()->attach($request->category);

        return redirect('post');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
//        $data= Post::with('comments')->get();
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
