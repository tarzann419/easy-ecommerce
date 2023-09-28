@extends('frontend.main_master')
@section('content')



<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <br>
                <img class="card-img-top" src="{{ (!empty($user->profile_photo_path))  ? url('upload/user_images/'.$user->profile_photo_path) : url('upload/no_image.jpg') }}" style="width: 100px; height: 100px; border-radius: 50%;" alt=""> <br><br>
                <ul class="list-group list-group-flush">
                    <a href="" class="btn btn-primary btn-sm btn-block">Home</a>
                    <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                    <a href="" class="btn btn-primary btn-sm btn-block">Change Password</a>
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                </ul>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center">
                        <span class="text-danger">
                            Yo Whats Good
                        </span><strong>{{ Auth::user()->name }}</strong> Update Your Profile
                    </h3>


                    <div class="card-body">
                        <form action="{{ route('update.profile') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="exampleInputPassword1">Name </label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control unicase-form-control text-input">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputPassword1">Phone </label>
                                <input type="text" value="{{ $user->phone }}" name="phone" class="form-control unicase-form-control text-input">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputPassword1">Email </label>
                                <input type="email" value="{{ $user->email }}" name="email" class="form-control unicase-form-control text-input">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputPassword1">User Image </label>
                                <input type="file" value="{{ $user->profile_photo_path }}" name="profile_photo_path" class="form-control unicase-form-control text-input">
                            </div>
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Update Profile</button><br><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection