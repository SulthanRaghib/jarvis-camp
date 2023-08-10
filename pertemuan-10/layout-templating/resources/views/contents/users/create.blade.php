@extends('main')
@section('content')
    <!-- Main Content -->
    <div>
        <!-- Page Heading -->
        <div class="d-flex justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah User</h1>
            <a href="{{ route('users') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-12">
                <div class="card-body shadow mb-4">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedbacl text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputName1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputName1"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedbacl text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            @error('password')
                                <div class="invalid-feedbacl text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
@endsection
