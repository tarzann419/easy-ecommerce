@extends('frontend.main_master')
@section('content')



<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <br>
                <img class="card-img-top" src="{{ (!empty($user->profile_photo_path))  ? url('upload/user_images/'.$user->profile_photo_path) : url('upload/no_image.jpg') }}" style="width: 100px; height: 100px; border-radius: 50%;" alt=""> <br><br>
                <ul class="list-group list-group-flush">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">Home</a>
                    <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                    <a href="{{ route('change.password') }}" class="btn btn-primary btn-sm btn-block">Change Password</a>
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
                        </span><strong>{{ Auth::user()->name }}</strong> Change Password
                    </h3>


                    <div class="card-body">
                        <form action="{{ route('change.password.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                    <h5>Current Password </h5>
                                    <div class="controls">
                                        <input type="password" id="current_password" name="oldpassword" class="form-control" required="">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <h5>New Password </h5>
                                    <div class="controls">
                                        <input type="password" id="password" name="password" class="form-control" required="">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <h5>Confirm Password </h5>
                                    <div class="controls">
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required="">
                                    </div>
                                </div>

                            
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Change Password</button><br><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection