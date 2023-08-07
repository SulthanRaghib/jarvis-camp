@extends('main')
@section('content')
    <!-- Main Content -->
    <div>
        <!-- Page Heading -->
        <div class="d-flex justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail User</h1>
            <a href="{{ route('users') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card-body shadow mb-4">
                    <div class="card-header">
                        <h3 class="text-center">{{ $dataUser->name }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="https://source.unsplash.com/random/800x800" class="card-img-top" alt="...">
                            </div>
                            <div class="col-8">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Nama</th>
                                            <td>{{ $dataUser->name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <td>{{ $dataUser->email }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Created At</th>
                                            <td>{{ $dataUser->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Updated At</th>
                                            <td>{{ $dataUser->updated_at }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
        @endsection
