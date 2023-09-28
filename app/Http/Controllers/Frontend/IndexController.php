<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function UserLogout(){
        Auth::logout();
        $notification = array(
            'alert-type' => 'success',
            'message' => 'User Logout Successful'
        );
        return redirect()->route('login')->with($notification);
    }


    public function UserProfile(){
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('frontend.profile.user_profile', compact('user'));
    }

    public function UpdateProfile(Request $request){
        $id = Auth::user()->id;

        $data = User::find($id); 

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');

            @unlink(public_path('upload/user_images'.$data->profile_photo_path));

            // gen unique name
            $filename = date('YmdHi').$file->getClientOriginalName();

            // upload file
            $file->move(public_path('upload/user_images'), $filename);

            $data['profile_photo_path'] = $filename;
        
        } 

        $data->save();

        $notification = array(
            'message' => 'Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('dashboard')->with($notification);

    }


    public function ChangePassword(){
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('frontend.profile.change_password', compact('user'));
    }

    public function ChangeUpdatePassword(Request $request){
        try {
            $validateData = $request->validate([
                'oldpassword' => 'required',
                'password' => 'required|confirmed'
            ]); 
    
            $hashed = Auth::user()->password;
            if ( Hash::check($request->oldpassword, $hashed) ) {
                $user = User::find(Auth::user()->id);
                $user->password = Hash::make($request->password);
                $user->save();
    
                Auth::logout();
                $notification = array(
                    'alert-type' => 'success',
                    'message' => 'Password Changed successfully'
                );
                $notification2 = array(
                    'alert-type' => 'success',
                    'message' => 'Logout'
                );
                return redirect()->route('user.logout')->with($notification, $notification2);
            } else {
                $notification = array(
                    'alert-type' => 'error',
                    'message' => 'Password Wasnt Changed successfully'
                );
                return redirect()->back()->with($notification);
            }
        } 

        catch (\Throwable $th) {
            throw $th;
        }
    }

}