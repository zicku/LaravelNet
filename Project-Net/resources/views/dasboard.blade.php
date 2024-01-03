@extends('layout.main')

@section('content')

<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Bordered panel body table -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Data User</h5>
                    <div class="heading-element">
                        <a href="{{ route('user.create') }}" class="btn btn-primary">Create New User</a>
                    </div>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="bar">
                    <div class="panel-body">
                        <div class="row justify-content-end align-items-center mb-20">
                            <div class="col-md-4">
                                <form action="{{ route('index') }}" method="GET" class="form-inline">
                                    <div class="input-group">
                                        <label class="sr-only" for="search">Search</label>
                                        <span class="input-group-addon"><i class="icon-search4"></i></span>
                                        <input type="text" class="form-control" id="search" placeholder="Search..." name="search" value="{{ $request->get('search') }}">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-8 text-right">
                                <a href="{{ route('index', ['sortField' => 'name', 'sortDirection' => 'asc']) }}" class="btn btn-default"><i class="icon-arrow-up16"></i> Asc</a>
                                <a href="{{ route('index', ['sortField' => 'name', 'sortDirection' => 'desc']) }}" class="btn btn-default ml-1"><i class="icon-arrow-down16"></i> Desc</a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-framed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{ $loop -> iteration }}</td>
                                        <td><img src="{{ asset('storage/photo-user/'.$d->image) }}" alt="" width='100'></td>
                                        <td>{{ $d-> name }}</td>
                                        <td>{{ $d-> email }}</td>
                                        <td>
                                            <a href="{{ route('user.edit',['id'=> $d->id])}}" class="btn btn-primary"><i
                                                    class="icon-pencil3"></i> Edit</a>
                                            <a class="btn btn-danger" data-toggle="modal"
                                                data-target="#modal_delete{{ $d->id }}"><i class="icon-trash"></i> Delete</a>
                                        </td>
                                    </tr>
                                    <!-- Basic modal -->
                                    <div id="modal_delete{{ $d->id }}" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h5 class="modal-title">Delete User</h5>
                                                </div>

                                                <div class="modal-body">
                                                    <h6 class="text-semibold">Are you sure you want to delete the user data? <b>{{ $d->name }}</b></h6>
                                                </div>

                                                <div class="modal-footer">
                                                    <form action="{{ route('user.delete', ['id' => $d->id]) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">OK</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /basic modal -->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /bordered panel body table -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->
@endsection
