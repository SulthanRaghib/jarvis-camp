@extends('main')
@section('content')
    <!-- Main Content -->
    <div>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Users</h1>
        <p class="mb-4">Users is a third party plugin that is used to generate the demo table below.
            For more information about Users, please visit the <a target="_blank" href="https://tables.net">official
                Users documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Users Example</h6>

                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Add User
                </a>
            </div>
            <div class="card-body">
                @if (session()->get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session()->get('success') }}
                        <button class="close" data-dismiss="alert" aria-label="close">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($dataUser as $u)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>{{ Carbon\Carbon::parse($u->created_at)->format('d M Y') }}</td>
                                    <td>
                                        <a href={{ route('users.detail', $u->id) }} class="btn btn-info btn-sm">
                                            <i class="fas fa-info-circle"></i> View
                                        </a>
                                        <a href={{ route('users.edit', $u->id) }} class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('users.delete', $u->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure want delete users id = {{ $u->id }} ?')">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
@endsection
