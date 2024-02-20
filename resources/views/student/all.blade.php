@extends('layout.main')

@section('content')

   <div class="m-auto">
    <h1>Ini adalah halaman student</h1>
    {{-- <a href="/student/create"><button class="btn btn-primary">Add Data</button></a> --}}
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
                        <a href="/student/detail/{{ $student->id }}" class="btn btn-primary">Detail</a>
                        {{-- <a href="/student/edit/{{ $student->id }}" class="btn btn-warning">Edit</a>
                        <form action="/student/delete/{{ $student->id }}" method="POST" style="display: inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form> --}}
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
@endsection

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
