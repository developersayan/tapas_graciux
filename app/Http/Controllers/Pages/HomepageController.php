<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\BlogImages;
use App\Models\Contact;
use Mail;
use App\Mail\ContactMail;
use App\Models\Gallery;
use DB;
class HomepageController extends Controller
{
    public function index()
    {
        $data = [];
        $data['banner'] = Banner::where('type','U')->get();
        $data['banner_lower'] = Banner::where('type','L')->get();
        $data['testimonial'] = Testimonial::get();
        $data['category_one'] = Blog::orderBy('id','desc')->where('category_id',1)->get();
        $data['category_two'] = Blog::orderBy('id','desc')->where('category_id',2)->get();
        $data['category_three'] = Blog::orderBy('id','desc')->where('category_id',3)->get();
        return view('welcome',$data);
    }

    
    public function contactPost(Request $request)
    {
        $contact  = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();

        
        $data = [
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'message'=>$request->message,
                ];
        Mail::send(new ContactMail($data));
        return redirect()->back()->with('success','Thank you for reaching out. We will be in touch with you shortly.');
    }

    public function packageEnqyuiry(Request $request)
    {
        $contact  = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->package_id = $request->package_id;
        $contact->quantity = $request->quantity;
        $contact->save();
        $package = Blog::where('id',$request->package_id)->first();
        $data = [
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'quantity'=>$request->quantity,
                'package_id'=>$package,
                'package'=>1,
                ];
        Mail::send(new ContactMail($data));
        return redirect()->back()->with('success','Thank you for your enquiry. We will give you an update soon.');
    }

    public function aboutUs()
    {
        $data = [];
        $data['testimonial'] = Testimonial::get();
        return view('about',$data);
    }

    public function products(Request $request)
    {
        $data = [];
        if(@$request->keyword){
            $data['category_one'] = Blog::orderBy('id','desc')->where('category_id',1)->where(function($query){
                $query->where('title','LIKE','%'.request('keyword').'%')
                        ->orWhere('description','LIKE','%'.request('keyword').'%');
            })->get();


            $data['category_two'] = Blog::orderBy('id','desc')->where('category_id',2)->where(function($query){
                $query->where('title','LIKE','%'.request('keyword').'%')
                        ->orWhere('description','LIKE','%'.request('keyword').'%');
            })->get();
            $data['category_three'] = Blog::orderBy('id','desc')->where('category_id',3)->where(function($query){
                $query->where('title','LIKE','%'.request('keyword').'%')
                        ->orWhere('description','LIKE','%'.request('keyword').'%');
            })->get();

        }else{
            $data['category_one'] = Blog::orderBy('id','desc')->where('category_id',1)->get();
            $data['category_two'] = Blog::orderBy('id','desc')->where('category_id',2)->get();
            $data['category_three'] = Blog::orderBy('id','desc')->where('category_id',3)->get();
        }
        
        return view('product',$data);
    }

    public function productDetails($id)
    {
        $data = [];
        $data['data'] = Blog::where('id',$id)->first();
        $data['images'] = BlogImages::where('blog_id',$id)->get();
        return view('product_details',$data);
    }

    public function contactUs()
    {
        return view('contact');
    }

    public function blogPage()
    {
        $data = [];
        $data['data'] = Blog::where('post_type','B')->orderBy('id','desc')->get();
        return vieW('blog',$data);
    }

    public function blogDetails($id)
    {
        $data = [];
        $data['data'] = Blog::where('id',$id)->first();
        $data['images'] = BlogImages::where('blog_id',$id)->get();
        return view('blog_details',$data);
    }
    






    
}
