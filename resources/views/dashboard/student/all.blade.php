@extends('layout.navdashboard')

@section('content')

<!doctype html>
<html lang="en" data-bs-theme="auto">
<head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Dashboard Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../../Users/ASUS/AppData/Local/Temp/dashboard.css" rel="stylesheet">
</head>
<body>



   <div class="m-auto">
    <h1>Ini adalah halaman student</h1>
    <a href="/dashboard/student/create"><button class="btn btn-primary">Add Data</button></a>
    <br>
    <br>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-13" role="alert">
            {{ session('success') }}
        </div>
    @else
        @if (session()->has('error'))
            <div class="alert alert-danger col-lg-13" role="alert">
                {{ session('error') }}
            </div>
        @endif
    @endif

    <form  class="form-inline mb-4 d-flex gap-4">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" value="{{ $search }}">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>
                        @if ($student->grades)
                            {{ $student->grades->Nama }}
                        @else
                            No Class Assigned
                        @endif
                    </td>
                    <td>{{ $student->tanggal_lahir }}</td>
                    <td>{{ $student->alamat }}</td>
                    <td>
                        <a href="/dashboard/student/detail/{{ $student->id }}" class="btn btn-primary">Detail</a>
                        <a href="/dashboard/student/edit/{{ $student->id }}" class="btn btn-warning">Edit</a>
                        <form action="/dashboard/student/delete/{{ $student->id }}" method="POST" style="display: inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="pagination justify-content-center">
        <nav aria-label="Page navigation">
            <ul class="pagination ">
                @if ($students->onFirstPage())
                    <li class="page-item disabled"><span class="page-link">Previous</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $students->previousPageUrl() }}">Previous</a></li>
                @endif
    
                
                        <h2>{{ $students->currentPage() }}</h2>
               
    
                @if ($students->hasMorePages())
                    <li class="page-item"><a class="page-link" href="{{ $students->nextPageUrl() }}">Next</a></li>
                @else
                    <li class="page-item disabled"><span class="page-link">Next</span></li>
                @endif
            </ul>
        </nav>
    </div>

   </div>
   


@push('styles')
    <style>
        .pagination {
            margin-top: 20px;
            justify-content: space-evenly;
        }
    
        .pagination .page-item .page-link {
            color: #007bff;
        }
    
        .pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
        }
    
        .pagination .page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #007bff;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }
    
        .pagination .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
            cursor: auto;
            background-color: #fff;
            border-color: #dee2e6;
        }
    </style>
@endpush

        </main>
    </div>
</div>
<script src="dashboard.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
@endsection