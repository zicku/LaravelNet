@extends('layout.main')
@section('content')
<div class="page-container">
    <div class="row-pl-100">
        <div class="col-md-12">
            <form action="{{ route('user.update', ['id' => $data->id]) }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">Edit Data</h5>
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
                            <label class="col-lg-3 control-label">Photo:</label>
                            <div class="col-lg-9">
                                @if($data->image)
                                <img src="{{ asset('storage/photo-user/' .$data->image) }}" alt="User Photo" style="max-width: 100px; max-height: 100px;">
                                @else
                                <p>No photo available</p>
                                @endif
                                <input type="file" name="photo" class="form-control" placeholder="Your photo profile">
                                @error('photo')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">UserName:</label>
                            <div class="col-lg-9">
                                <input type="text" name="name" class="form-control" value="{{ $data->name }}" placeholder="Enter your Username">
                                @error('name')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-9">
                                <input type="email" name="email" class="form-control" value="{{ $data->email }}" placeholder="Enter your email">
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
                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
