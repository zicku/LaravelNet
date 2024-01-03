@extends('layout.main')
@section('content')
<div class="page-container">
    <div class="row-pl-100">
        <div class="col-md-12">
            <form action="{{ route('user.store') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">Create New User</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Photo Profile</label>
                            <div class="col-lg-9">
                                <input type="file" name="photo" class="form-control">
                                @error('photo')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">UserName:</label>
                            <div class="col-lg-9">
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Username">
                                @error('name')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-9">
                                <input type="email" name="email" class="form-control" placeholder="enter your email">
                                @error('email')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Password:</label>
                            <div class="col-lg-9">
                                <input type="password" name="password" class="form-control" placeholder="Your strong password">
                                @error('password')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit form <i
                                    class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /basic layout -->
        </div>
    </div>
</div>
@endsection
