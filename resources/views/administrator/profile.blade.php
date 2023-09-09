@extends('layouts.admin-layout.app')
@section('title', 'Profile Settings')
@section('contents')
    <hr />
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="" >
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-3">
                <div class="row" id="res"></div>
                <div class="row mt-2">
  
                    <div class="col-md-6">
                        <label class="labels small">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{Auth::guard('admin')->user()->name}}">
                    </div>
                    
                    <div class="col-md-6">
                        <label class="labels small">Email</label>
                        <input type="text" name="email" disabled class="form-control" value="{{Auth::guard('admin')->user()->email_add}}" placeholder="Email">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels small">Contact #</label>
                        <input type="text" name="phone" class="form-control" placeholder="Contact Number" value="{{Auth::guard('admin')->user()->contact_num}}">
                    </div>
                    <div class="col-md-6">
                    <label class="labels small">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" value="{{Auth::guard('admin')->user()->password}}" placeholder="Password" data-toggle="password">
                        </div>
                    </div>
                </div>
                 
                <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
            </div>
        </div>
         
    </div>   
            
</form>


@endsection