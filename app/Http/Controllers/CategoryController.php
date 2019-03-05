<?php

namespace App\Http\Controllers;

use App\Category;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Category::all();
        return view('Admin/Category/view')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/Category/create_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c_image = explode(',', $request->cover_image);
        $c_imageList=[];

        foreach ($c_image as $c){
            $c_imageList[]= parse_url($c)['path'];
        }


        $picture = explode(',', $request->pictures);
        $pictureList=[];

        foreach ($picture as $i){
            $pictureList[]= parse_url($i)['path'];
        }
        $pictures = implode(',', $pictureList);



        $category = new Category;

        $category->title = $request->title;
        $category->position= $request->position;
        $category->status = $request->status;
        $category->c_image= parse_url($c)['path'];
        $category->pictures = $pictures;

        $category->save();

        return redirect('category');

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
