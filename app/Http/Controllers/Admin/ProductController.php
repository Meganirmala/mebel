<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = Product::paginate(10);
    
        return view('admin.product.v_index', compact('product'))
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
        $category = Category::get();
        return view('admin.product.v_create', compact('category'));
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
            'product_name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], $messages);

        if ($files = $request->file('image'))
        {
          $destinationPath = 'img';
          $imageName = date('YmdHis') . "1." . $files->getClientOriginalExtension();
          $files->move($destinationPath, $imageName);
          $request->request->add(['foto' => $imageName ]);
        }

        $product = Product::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'foto' =>$request->foto,
            'product_description' => $request->product_description,
        ]);

        return redirect()->route('product.index')
        ->with('success','Product succefully added.');
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
        $product = Product::with('category')->find($id);
        return view('admin.product.v_detail',compact('product'));
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
        $product = Product::where('id', $id)->with('category')->first();
        $category = Category::all();
        return view('admin.product.v_edit', compact('product','category'));
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
        $product = Product::where('id', $id)->with('category')->first();
        $validatedData = $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $data = [
            'product_name' => $request->product_name,
            'price' => $request->price,
            'category_id'=>$request->category_id,
            'product_description'=>$request->product_description,
            ];
        $path = public_path('img/'. $product->foto);

        if ($files = $request->file('image')) 
            {
                if($product->foto != ''  && $product->foto != null)
                {
                    $file_old = $path;
                    unlink ($file_old);
            }
            $destinationPath = 'img';
            $imageName = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $imageName);
            $save['foto'] = "$imageName";
            $request->request->add(['foto' => $imageName ]);
            $data['foto'] = $request->foto;
        }

        $product = Product::whereId($id)->update($data);

        return redirect()->route('product.index')
        ->with('success','Product Successfuly changed'); 

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
        // $product = Product::find($id);
        // $product->delete();
        // return redirect()->route('product.index')
        // ->with('success','Product succefully deleted');
        $product = Product::find($id);
        if($product->foto){
            $file_path = public_path('img/'.$product->foto); 
         }
         if ($product){
            if (file_exists($file_path)) {
                if  (unlink($file_path)){
                    $product->delete();
                    return redirect()->route('product.index')
                    ->with('success','Product succefully deleted');
                }
                else {
                    return redirect()->route('product.index')
                    ->with('error','Product gagal dihapus');
                } 
             }
        }
        
    }
   
}
