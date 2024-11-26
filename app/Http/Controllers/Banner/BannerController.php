<?php

namespace App\Http\Controllers\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
class BannerController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = Banner::get();
        return view('banner.index',$data);
    }

    public function insert(Request $request)
    {
        // return $request;
        $ins = [];
        $ins['heading_banner'] = $request->heading_banner;
        $ins['heading_description'] = $request->heading_description;
        $ins['type'] = $request->type;
        if ($request->image) {
           // @unlink('storage/app/public/banner_min/'.$banner->image);
           // @unlink('storage/app/public/banner/'.$banner->image);
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/banner",$filename);    
            $ins['image'] = $filename;
        }
        Banner::create($ins);
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function delete($id)
    {
        $check = Banner::where('id',$id)->first();
        @unlink('storage/app/public/banner/'.$check->image);
        Banner::where('id',$id)->delete();
        return redirect()->back()->with('success','Data Deleted Successfully');
    }
}
