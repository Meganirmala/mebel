<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    //
    public function seo(){

        $seo = Seo::first();
        // if(empty($seo)){
        //     $seo->description = '';
        //     $seo->keywords = '';
        //     $seo->author ='';
        //     $seo->robot_follow = 1;
        //     $seo->robot_index = 1;
        // return view('landingpage.seo', compact('seo'));

        // }
        return view('landingpage.seo', compact('seo'));
    }

    public function seo_store(Request $request){

        // $seo = Seo::get();
        // dd($seo);
        
        $seo = Seo::first();
        // dd($seo->description);

        if(is_null($seo)){
            $create_seo = Seo::updateOrcreate([
                'description' =>$request->description,
                'keywords' =>$request->keywords,
                'author' =>$request->author,
                'robot_follow' =>$request->robot_follow,
                'robot_index' =>$request->robot_index,
            ]);
            return redirect()->route('index')
            ->with('success','SEO succefully added.');
        }
        else{
            // $seo_var = Seo::find(1);

            // $seo_var->description = $request->description;
            // $seo_var->keywords = $request->keywords;
            // $seo_var->author = $request->author;
            // $seo_var->robot_follow = $request->robot_follow;
            // $seo_var->robot_index = $request->robot_index;

            // $seo_var->save();
            // return redirect()->route('index')
            // ->with('success','SEO succefully added.');

            $data = [
                'description' =>$request->description,
                'keywords' =>$request->keywords,
                'author' =>$request->author,
                'robot_follow' =>$request->robot_follow,
                'robot_index' =>$request->robot_index,
            ];
            $update_seo = Seo::whereRaw('1' == '1')->update($data);
            return redirect()->route('index')
            ->with('success','SEO succefully added.');
        }

        

        
    }
}
