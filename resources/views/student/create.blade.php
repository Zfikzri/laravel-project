@extends('layout.main')

@section('content')
  <h1>{{$title}}</h1>

  <form method="POST" action="/student/add">
  @csrf

    <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input name="nis" class="form-control" id="nis" value="{{old('nis')}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Siswa</label>
        <input name="nama" class="form-control" id="nama_siswa" value="{{old('nama_siswa')}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Kelas</label>
        <select class="form-select" name="kelas" id="kelas">
            @foreach($kelas as $class)
            <option name="kelas" value="{{$class->Nama}}">{{$class ->Nama}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
        <input type=date name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{old('tanggal_lahir')}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Alamat</label>
        <input name="alamat" class="form-control" id="alamat" value="{{old('alamat')}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection