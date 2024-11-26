<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceToImage;
class ServiceController extends Controller
{
    
    public function index()
    {
        $data = [];
        $data['data'] = Service::orderBy('id','desc')->get();
        return view('gallery.service',$data);
    }

    public function insert(Request $request)
    {
        if ($request->image) {
           $ins = new Service; 
           $image = $request->image;
           $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            //real image
            $image->move("storage/app/public/service",$filename);    
            $ins->image = $filename;
            $ins->name = $request->name;
            // $ins->plot = $request->plot;
            $ins->save();
        }
        return redirect()->back()->with('success','Image Saved Successfully');
    }

    public function delete($id)
    {
        $check = Service::where('id',$id)->first();
        @unlink('storage/app/public/service/'.$check->image);
        Service::where('id',$id)->delete();
        return redirect()->back()->with('success','Image Deleted Successfully');
    }

    public function serviceImage($id)
    {
        $data = [];
        $data['data'] = ServiceToImage::where('service_id',$id)->get();
        $data['id'] = $id;
        return view('service_image',$data);
    }

    public function serviceImageInsert(Request $request)
    {
        $new = new ServiceToImage;
        $new->service_id = $request->service_id;
        if ($request->image) {
            $image = $request->image;
            $filename = time() . '-' . rand(1000, 9999) . '.' . $image->getClientOriginalExtension();
            $image->move("storage/app/public/gallery",$filename);    
            $new->image = $filename;
        }
        $new->save();
        return redirect()->back()->with('success','Gallery image inserted successfully');
    }

    public function serviceImagedelete($id)
    {
        $check = ServiceToImage::where('id',$id)->first();
        @unlink('storage/app/public/gallery/'.$check->image);
        ServiceToImage::where('id',$id)->delete();
        return redirect()->back()->with('success','Gallery image deleted successfully');
    }
}
