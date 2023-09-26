<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function AdminProfile(){
        $adminData = Admin::find(1); 
        return view('admin.admin_profile_view', compact('adminData'));
    }

    public function AdminProfileEdit(){
        $editData = Admin::find(1); 
        return view('admin.admin_profile_edit', compact('editData'));
    }

    public function AdminProfileStore(Request $request){
        $data = Admin::find(1); 

        // $data->name = $request->name;
        // $data->email = $request->email;

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');

            // replace the prev.image
            @unlink(public_path('upload/admin_images'.$data->profile_photo_path));

            // gen unique name
            $filename = date('YmdHi').$file->getClientOriginalName();

            // upload file
            $file->move(public_path('upload/admin_images'), $filename);

            $data['profile_photo_path'] = $filename;


            $data->name = $request->name;
            $data->email = $request->email;

            $data->save();
        
        } else{
            $data->name = $request->name;
            $data->email = $request->email;

            $data->save();
        }

        // $data->save();

        return redirect()->route('admin.profile');



    }
}
