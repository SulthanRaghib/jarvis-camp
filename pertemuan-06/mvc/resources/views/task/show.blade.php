<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS CDN Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- ICON CDN Boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Task Management Detail</title>
</head>

<body class="container-fluid">
    <h1 class="mt-4 text-center">Task Management Detail - {{ $tugas['id'] }}</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-end mb-3">
                <a href="{{ route('task.index') }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-arrow-bar-left"></i> Back
                </a>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Task</th>
                        <td>{{ $tugas['name'] }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td>{{ $tugas['description'] }}</td>
                    </tr>
                    <tr>
                        <th>Deadline</th>
                        <td>{{ \Carbon\Carbon::parse($tugas['deadline'])->format('d F Y') }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $tugas['status'] }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    {{-- JS CDN Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
