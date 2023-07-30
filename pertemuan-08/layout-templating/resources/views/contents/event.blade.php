@extends('main')
@section('content')
    <!-- Main Content -->
    <div>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Events</h1>
        <p class="mb-4">Events is a third party plugin that is used to generate the demo table below.
            For more information about Events, please visit the <a target="_blank" href="https://tables.net">official
                Events documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Events Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Event</th>
                                <th>Start At</th>
                                <th>End At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Event</th>
                                <th>Start At</th>
                                <th>End At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($dataEvent as $e)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $e->title }}</td>
                                    <td>{{ Carbon\Carbon::parse($e->start_at)->format('d M Y') }}</td>
                                    <td>{{ Carbon\Carbon::parse($e->end_at)->format('d M Y') }}</td>
                                    <td>
                                        @if ($e->start_at < Carbon\Carbon::now() && $e->end_at > Carbon\Carbon::now())
                                            <span class="badge badge-success">On Going</span>
                                        @elseif ($e->start_at > Carbon\Carbon::now())
                                            <span class="badge badge-warning">Upcoming</span>
                                        @else
                                            <span class="badge badge-danger">Expired</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">
                                            <i class="fas fa-info-circle"></i> View
                                        </a>
                                        <a href="#" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> Delete
                                        </a>
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
