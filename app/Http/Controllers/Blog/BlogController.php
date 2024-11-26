<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogImages;
class BlogController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = Blog::get();
        return view('blog.index',$data);
    }

    public function add()
    {
        return view('blog.add');
    }

    public function insert(Request $request)
    {
        $new = new Blog;
        $new->title = $request->title;
        $new->description = $request->description;
        $new->post_type = $request->post_type;
        if(@$request->post_type=="P"){
           $new->price = $request->price;
           $new->stock = $request->stock;
           $new->category_id = $request->category_id;
           $new->mrp = $request->mrp;
        }else{
           $new->price = null;
           $new->stock = null;
           $new->category_id = null;
           $new->mrp = null;
        }
        
        
        if ($request->image) {
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/blog",$filename);    
            $new->image = $filename;
        }

        if ($request->product_image) {
           $image = $request->product_image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/blog",$filename);    
            $new->product_image = $filename;
        }
        $new->save();
        return redirect()->route('manage.blog')->with('success','Data Saved Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = Blog::where('id',$id)->first();
        return view('blog.edit',$data);
    }

    public function update(Request $request)
     {
        $upd = [];
        $upd['title'] = $request->title;
        $upd['description'] = $request->description;
        $upd['post_type'] = $request->post_type;
        if(@$request->post_type=="P"){
           $upd['price'] = $request->price;
           $upd['stock'] = $request->stock;
           $upd['category_id'] = $request->category_id;
           $upd['mrp'] = $request->mrp;
        }else{
           $upd['price'] = null;
           $upd['stock'] = null;
           $upd['category_id'] = null;
           $upd['mrp'] = null;
        }


        
        if ($request->image) {
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/blog",$filename);    
            $upd['image'] = $filename;
        }

        if ($request->product_image) {
           $image = $request->product_image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/blog",$filename);    
            $upd['product_image'] = $filename;
        }

        Blog::where('id',$request->id)->update($upd);
        return redirect()->back()->with('success','Data Updated Successfully');

     }

     public function delete($id)
     {
        Blog::where('id',$id)->delete();
        return redirect()->back()->with('success','Data Deleted Successfully');
     }

     public function show($id)
     {
        $check = Blog::where('id',$id)->first();
        if (@$check->show_at_home=="Y") {
            Blog::where('id',$id)->update(['show_at_home'=>'N']);
        }else{
            Blog::where('id',$id)->update(['show_at_home'=>'Y']);
        }
        return redirect()->back()->with('success','Data Status Changed Successfully');
     }


     public function gallery($id)
     {
        $data = [];
        $data['data'] = BlogImages::where('blog_id',$id)->get();
        $data['id'] = $id;
        return view('blog.gallery',$data);
     }

     public function galleryInsert(Request $request)
     {
        if ($request->image) {
           $ins = new BlogImages; 
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/blog",$filename);    
            $ins->image = $filename;
            $ins->blog_id = $request->id;
            $ins->save();
        }
        return redirect()->back()->with('success','Image Saved Successfully');
     }

     public function galleryDelete($id)
     {
        $check = BlogImages::where('id',$id)->first();
        @unlink('storage/app/public/blog/'.$check->image);
        BlogImages::where('id',$id)->delete();
        return redirect()->back()->with('success','Image Deleted Successfully');
     }
}
