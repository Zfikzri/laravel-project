@extends('layout.main')

@section('content')
    <h2>Student Detail</h2>
    <div class="form">
        <div class="form-group">
            <label for="">NIS</label>
            <input type="text" class="form-control" name="nis" id="nis" value="{{ $student->nis }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $student->nama }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Date of Birth</label>
            <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $student->tanggal_lahir }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Class</label>
            <input type="text" class="form-control" name="kelas" id="kelas" value="{{ $student->grades ? $student->grades->Nama : 'No Class Assigned' }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $student->alamat }}" disabled>
        </div>
        <div class="text-center"> 
    </div>
    </div>

    @endsection