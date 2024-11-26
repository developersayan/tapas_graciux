<?php

namespace App\Http\Controllers\Testimonial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
class TestimonialController extends Controller
{
     public function index()
     {
        $data = [];
        $data['data'] = Testimonial::get();
        return view('testimonial.index',$data);
     }

     public function add()
     {
        return view('testimonial.add');
     }

     public function insert(Request $request)
     {
        $new = new Testimonial;
        if ($request->image) {
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/testimonial",$filename);    
            $new->image = $filename;
        }

        $new->save();
        return redirect()->route('manage.testimonial')->with('success','Data Saved Successfully');
     }

     public function edit($id)
     {
        $data = [];
        $data['data'] = Testimonial::where('id',$id)->first();
        return view('testimonial.edit',$data);
     }

     public function update(Request $request)
     {
        $upd = [];
        if ($request->image) {
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/testimonial",$filename);    
            $upd['image'] = $filename;
        }

        Testimonial::where('id',$request->id)->update($upd);
        return redirect()->back()->with('success','Data Updated Successfully');

     }

     public function delete($id)
     {
        Testimonial::where('id',$id)->delete();
        return redirect()->back()->with('success','Data Deleted Successfully');
     }
}
