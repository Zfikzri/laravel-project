@extends('layout.navdashboard')

@section('content')
    <div class="container mt-4">
        <a href="/class/create" class="btn btn-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
            </svg> Add New Data
        </a>

        @if(session()->has("success"))
            <div class="alert alert-success mt-3" role="alert">
                {{ session("success") }}
            </div>
        @endif
        @if(session()->has("worked"))
            <div class="alert alert-danger mt-3" role="alert">
                {{ session("worked") }}
            </div>
        @endif
        @if(session()->has("updated"))
            <div class="alert alert-warning mt-3" role="alert">
                {{ session("updated") }}
            </div>
        @endif

        @if(count($kelas) > 0)
            <table class="table table-striped mt-3">
                <thead class="thead-dark">
                    <tr class='table-dark'>
                        <th scope="col">Nomor</th>
                        <th scope="col">Nama Kelas</th>
                        {{-- <th scope="col" class="text-center">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @php $nomor = 1; @endphp
                    @foreach($kelas as $item)
                        <tr>
                            <td>{{ $nomor++ }}</td>
                            <td>{{ $item->Nama }}</td>
                            <td class="text-center">
                                <a href="/class/edit/{{$item->id}}" class="btn btn-success">Edit</a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Modals diluar tabel -->
            @foreach($kelas as $item)
                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="deleteModalLabel{{ $item->id }}">Konfirmasi Hapus</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center">Apakah Anda yakin ingin menghapus Kelas {{$item->Nama}} ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <form action="/class/delete/{{$item->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="text-center mt-3">
                <p class="alert alert-info fs-1">NO DATA</p>
            </div>
        @endif
    </div>
@endsection
