<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Http\Request;
use Image;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function AllBrand()
    {
        $brands = Brand::latest()->get();
        return view('admin.brand.brand_view', compact('brands'));
    }

    public function StoreBrand(Request $request)
    {

        $request->validate(
            [
                'brand_name_en' => 'required',
                'brand_name_fr' => 'required',
                'brand_image' => 'required',
            ],
            [
                'brand_name_en.required' => 'English Brand Name Cant Be Empty',
                'brand_name_fr.required' => 'French Brand Name Cant Be Empty',
            ]
        );

        $image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save('upload/brand' . $name_gen);
        $save_url =  'upload/brand' . $name_gen;
        Brand::insert([
            'brand_name_en' => $request->brand_name_en,
            'brand_slug_en' => strtolower(str_replace(' ', '-', $request->brand_name_en)),
            'brand_name_fr' => $request->brand_name_fr,
            'brand_slug_fr' => strtolower(str_replace(' ', '-', $request->brand_name_fr)),
            'brand_image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Store Brand Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function EditBrandPage($id)
    {
        $brand = Brand::findOrFail($id)->first();
        return view('admin.brand.edit_brand', compact('brand'));
    }

    public function UpdateBrand(Request $request)
    {
        $brand_id = $request->id;
        $old_image = $request->old_image;


        if ($request->file('brand_image')) {
            unlink($old_image);
            $image = $request->file('brand_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('upload/brand' . $name_gen);
            $save_url =  'upload/brand' . $name_gen;
            Brand::findOrFail($brand_id)->update([
                'brand_name_en' => $request->brand_name_en,
                'brand_slug_en' => strtolower(str_replace(' ', '-', $request->brand_name_en)),
                'brand_name_fr' => $request->brand_name_fr,
                'brand_slug_fr' => strtolower(str_replace(' ', '-', $request->brand_name_fr)),
                'brand_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Store Brand Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.brand')->with($notification);
        } else{
            Brand::findOrFail($brand_id)->update([
                'brand_name_en' => $request->brand_name_en,
                'brand_slug_en' => strtolower(str_replace(' ', '-', $request->brand_name_en)),
                'brand_name_fr' => $request->brand_name_fr,
                'brand_slug_fr' => strtolower(str_replace(' ', '-', $request->brand_name_fr)),
            ]);

            $notification = array(
                'message' => 'Store Brand Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.brand')->with($notification);
        }
    }


    public function DeleteBrand($id){
        $brand = Brand::findOrFail($id);
        $img = $brand->brand_image;
        unlink($img);

        Brand::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Store Brand Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
