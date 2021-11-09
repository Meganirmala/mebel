<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        //
        $category = Category::paginate(10);
    
        return view('admin.category.v_index', compact('category'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.v_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $messages = [
            'required' => ':attribute must be filled'
        ];
        request()->validate([
            'category_name' => 'required',
        ], $messages);

        $category = Category::create([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
        ]);

        return redirect()->route('category.index')
        ->with('success','Category succefully added.');
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
        $category = Category::where('id',$id)->first();
        return view('admin.category.v_edit', compact('category'));
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
        $category = Category::where('id', $id)->first();

        $validatedData = $request->validate([
            'category_name' => 'required',
            'category_description' => 'required',
        ]);
        $data =[
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            ];

        $category = Category::whereId($id)->update($data);

            return redirect()->route('category.index')
            ->with('success','Category succefully changed');  

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
        Category::whereId($id)->delete();
    
        return redirect()->route('category.index')
                        ->with('success','Category succefully deleted');
    }
}
